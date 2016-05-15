"use strict";
var DropZone = require('dropzone');
var markdown = require('marked');

var toggleSwitchTemplate = require('./components/toggle-switch.html');
var imagePickerTemplate = require('./components/image-picker.html');
var dropZoneTemplate = require('./components/drop-zone.html');

module.exports = function (ngApp, events) {

    /**
     * Toggle Switches
     * Has basic on/off functionality.
     * Use string values of 'true' & 'false' to dictate the current state.
     */
    ngApp.directive('toggleSwitch', function () {
        return {
            restrict: 'A',
            template: toggleSwitchTemplate,
            scope: true,
            link: function (scope, element, attrs) {
                scope.name = attrs.name;
                scope.value = attrs.value;
                scope.isActive = scope.value == true && scope.value != 'false';
                scope.value = (scope.value == true && scope.value != 'false') ? 'true' : 'false';

                scope.switch = function () {
                    scope.isActive = !scope.isActive;
                    scope.value = scope.isActive ? 'true' : 'false';
                }

            }
        };
    });


    /**
     * Image Picker
     * Is a simple front-end interface that connects to an ImageManager if present.
     */
    ngApp.directive('imagePicker', ['$http', 'imageManagerService', function ($http, imageManagerService) {
        return {
            restrict: 'E',
            template: imagePickerTemplate,
            scope: {
                name: '@',
                resizeHeight: '@',
                resizeWidth: '@',
                resizeCrop: '@',
                showRemove: '=',
                currentImage: '@',
                currentId: '@',
                defaultImage: '@',
                imageClass: '@'
            },
            link: function (scope, element, attrs) {
                var usingIds = typeof scope.currentId !== 'undefined' || scope.currentId === 'false';
                scope.image = scope.currentImage;
                scope.value = scope.currentImage || '';
                if (usingIds) scope.value = scope.currentId;

                function setImage(imageModel, imageUrl) {
                    scope.image = imageUrl;
                    scope.value = usingIds ? imageModel.id : imageUrl;
                }

                scope.reset = function () {
                    setImage({id: 0}, scope.defaultImage);
                };

                scope.remove = function () {
                    scope.image = 'none';
                    scope.value = 'none';
                };

                scope.showImageManager = function () {
                    imageManagerService.show((image) => {
                        scope.updateImageFromModel(image);
                    });
                };

                scope.updateImageFromModel = function (model) {
                    var isResized = scope.resizeWidth && scope.resizeHeight;

                    if (!isResized) {
                        scope.$apply(() => {
                            setImage(model, model.url);
                        });
                        return;
                    }

                    var cropped = scope.resizeCrop ? 'true' : 'false';
                    var requestString = '/images/thumb/' + model.id + '/' + scope.resizeWidth + '/' + scope.resizeHeight + '/' + cropped;
                    $http.get(requestString).then((response) => {
                        setImage(model, response.data.url);
                    });
                };

            }
        };
    }]);

    /**
     * DropZone
     * Used for uploading images
     */
    ngApp.directive('dropZone', [function () {
        return {
            restrict: 'E',
            template: dropZoneTemplate,
            scope: {
                uploadUrl: '@',
                eventSuccess: '=',
                eventError: '=',
                uploadedTo: '@'
            },
            link: function (scope, element, attrs) {
                var dropZone = new DropZone(element[0].querySelector('.dropzone-container'), {
                    url: scope.uploadUrl,
                    init: function () {
                        var dz = this;
                        dz.on('sending', function (file, xhr, data) {
                            var token = window.document.querySelector('meta[name=token]').getAttribute('content');
                            data.append('_token', token);
                            var uploadedTo = typeof scope.uploadedTo === 'undefined' ? 0 : scope.uploadedTo;
                            data.append('uploaded_to', uploadedTo);
                        });
                        if (typeof scope.eventSuccess !== 'undefined') dz.on('success', scope.eventSuccess);
                        dz.on('success', function (file, data) {
                            $(file.previewElement).fadeOut(400, function () {
                                dz.removeFile(file);
                            });
                        });
                        if (typeof scope.eventError !== 'undefined') dz.on('error', scope.eventError);
                        dz.on('error', function (file, errorMessage, xhr) {
                            console.log(errorMessage);
                            console.log(xhr);
                            function setMessage(message) {
                                $(file.previewElement).find('[data-dz-errormessage]').text(message);
                            }

                            if (xhr.status === 413) setMessage('The server does not allow uploads of this size. Please try a smaller file.');
                            if (errorMessage.file) setMessage(errorMessage.file[0]);

                        });
                    }
                });
            }
        };
    }]);


    ngApp.directive('dropdown', [function () {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
                var menu = element.find('ul');
                element.find('[dropdown-toggle]').on('click', function () {
                    menu.show().addClass('anim menuIn');
                    element.mouseleave(function () {
                        menu.hide();
                        menu.removeClass('anim menuIn');
                    });
                });
            }
        };
    }]);

    ngApp.directive('tinymce', ['$timeout', function($timeout) {
        return {
            restrict: 'A',
            scope: {
                tinymce: '=',
                mceModel: '=',
                mceChange: '='
            },
            link: function (scope, element, attrs) {

                function tinyMceSetup(editor) {
                    editor.on('ExecCommand change NodeChange ObjectResized', (e) => {
                        var content = editor.getContent();
                        $timeout(() => {
                            scope.mceModel = content;
                        });
                        scope.mceChange(content);
                    });

                    editor.on('init', (e) => {
                        scope.mceModel = editor.getContent();
                    });

                    scope.$on('html-update', (event, value) => {
                        editor.setContent(value);
                        editor.selection.select(editor.getBody(), true);
                        editor.selection.collapse(false);
                        scope.mceModel = editor.getContent();
                    });
                }

                scope.tinymce.extraSetups.push(tinyMceSetup);

                // Custom tinyMCE plugins
                tinymce.PluginManager.add('customhr', function(editor) {
                    editor.addCommand('InsertHorizontalRule', function() {
                        var hrElem = document.createElement('hr');
                        var cNode = editor.selection.getNode();
                        var parentNode = cNode.parentNode;
                        parentNode.insertBefore(hrElem, cNode);
                    });

                    editor.addButton('hr', {
                        icon: 'hr',
                        tooltip: 'Horizontal line',
                        cmd: 'InsertHorizontalRule'
                    });

                    editor.addMenuItem('hr', {
                        icon: 'hr',
                        text: 'Horizontal line',
                        cmd: 'InsertHorizontalRule',
                        context: 'insert'
                    });
                });

                tinymce.init(scope.tinymce);
            }
        }
    }]);

    ngApp.directive('markdownInput', ['$timeout', function($timeout) {
        return {
            restrict: 'A',
            scope: {
                mdModel: '=',
                mdChange: '='
            },
            link: function (scope, element, attrs) {

                // Set initial model content
                var content = element.val();
                scope.mdModel = content;
                scope.mdChange(markdown(content));

                element.on('change input', (e) => {
                    content = element.val();
                    $timeout(() => {
                        scope.mdModel = content;
                        scope.mdChange(markdown(content));
                    });
                });

                scope.$on('markdown-update', (event, value) => {
                    element.val(value);
                    scope.mdModel= value;
                    scope.mdChange(markdown(value));
                });

            }
        }
    }]);

    ngApp.directive('markdownEditor', ['$timeout', function($timeout) {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {

                // Elements
                var input = element.find('textarea[markdown-input]');
                var insertImage = element.find('button[data-action="insertImage"]');

                var currentCaretPos = 0;

                input.blur((event) => {
                    currentCaretPos = input[0].selectionStart;
                });

                // Insert image shortcut
                input.keydown((event) => {
                    if (event.which === 73 && event.ctrlKey && event.shiftKey) {
                        event.preventDefault();
                        var caretPos = input[0].selectionStart;
                        var currentContent = input.val();
                        var mdImageText = "![](http://)";
                        input.val(currentContent.substring(0, caretPos) + mdImageText + currentContent.substring(caretPos));
                        input.focus();
                        input[0].selectionStart = caretPos + ("![](".length);
                        input[0].selectionEnd = caretPos + ('![](http://'.length);
                    }
                });

                // Insert image from image manager
                insertImage.click((event) => {
                    window.ImageManager.showExternal((image) => {
                        var caretPos = currentCaretPos;
                        var currentContent = input.val();
                        var mdImageText = "![" + image.name + "](" + image.url + ")";
                        input.val(currentContent.substring(0, caretPos) + mdImageText + currentContent.substring(caretPos));
                        input.change();
                    });
                });

            }
        }
    }]);
    
    ngApp.directive('toolbox', [function() {
        return {
            restrict: 'A',
            link: function(scope, elem, attrs) {

                // Get common elements
                const $buttons = elem.find('[tab-button]');
                const $content = elem.find('[tab-content]');
                const $toggle = elem.find('[toolbox-toggle]');

                // Handle toolbox toggle click
                $toggle.click((e) => {
                    elem.toggleClass('open');
                });
                
                // Set an active tab/content by name
                function setActive(tabName, openToolbox) {
                    $buttons.removeClass('active');
                    $content.hide();
                    $buttons.filter(`[tab-button="${tabName}"]`).addClass('active');
                    $content.filter(`[tab-content="${tabName}"]`).show();
                    if (openToolbox) elem.addClass('open');
                }

                // Set the first tab content active on load
                setActive($content.first().attr('tab-content'), false);

                // Handle tab button click
                $buttons.click(function(e) {
                    let name = $(this).attr('tab-button');
                    setActive(name, true);
                });
            }
        }
    }]);

    ngApp.directive('autosuggestions', ['$http', function($http) {
        return {
            restrict: 'A',
            link: function(scope, elem, attrs) {
                
                // Local storage for quick caching.
                const localCache = {};

                // Create suggestion element
                const suggestionBox = document.createElement('ul');
                suggestionBox.className = 'suggestion-box';
                suggestionBox.style.position = 'absolute';
                suggestionBox.style.display = 'none';
                const $suggestionBox = $(suggestionBox);

                // General state tracking
                let isShowing = false;
                let currentInput = false;
                let active = 0;

                // Listen to input events on autosuggest fields
                elem.on('input', '[autosuggest]', function(event) {
                    let $input = $(this);
                    let val = $input.val();
                    let url = $input.attr('autosuggest');
                    // No suggestions until at least 3 chars
                    if (val.length < 3) {
                        if (isShowing) {
                            $suggestionBox.hide();
                            isShowing = false;
                        }
                        return;
                    };

                    let suggestionPromise = getSuggestions(val.slice(0, 3), url);
                    suggestionPromise.then((suggestions) => {
                       if (val.length > 2) {
                           suggestions = suggestions.filter((item) => {
                               return item.toLowerCase().indexOf(val.toLowerCase()) !== -1;
                           }).slice(0, 4);
                           displaySuggestions($input, suggestions);
                       }
                    });
                });

                // Hide autosuggestions when input loses focus.
                // Slight delay to allow clicks.
                elem.on('blur', '[autosuggest]', function(event) {
                    setTimeout(() => {
                        $suggestionBox.hide();
                        isShowing = false;
                    }, 200)
                });

                elem.on('keydown', '[autosuggest]', function (event) {
                    if (!isShowing) return;

                    let suggestionElems = suggestionBox.childNodes;
                    let suggestCount = suggestionElems.length;

                    // Down arrow
                    if (event.keyCode === 40) {
                        let newActive = (active === suggestCount-1) ? 0 : active + 1;
                        changeActiveTo(newActive, suggestionElems);
                    }
                    // Up arrow
                    else if (event.keyCode === 38) {
                        let newActive = (active === 0) ? suggestCount-1 : active - 1;
                        changeActiveTo(newActive, suggestionElems);
                    }
                    // Enter key
                    else if (event.keyCode === 13) {
                        let text = suggestionElems[active].textContent;
                        currentInput[0].value = text;
                        currentInput.focus();
                        $suggestionBox.hide();
                        isShowing = false;
                        event.preventDefault();
                        return false;
                    }
                });

                // Change the active suggestion to the given index
                function changeActiveTo(index, suggestionElems) {
                    suggestionElems[active].className = '';
                    active = index;
                    suggestionElems[active].className = 'active';
                }

                // Display suggestions on a field
                let prevSuggestions = [];
                function displaySuggestions($input, suggestions) {

                    // Hide if no suggestions
                    if (suggestions.length === 0) {
                        $suggestionBox.hide();
                        isShowing = false;
                        prevSuggestions = suggestions;
                        return;
                    }

                    // Otherwise show and attach to input
                    if (!isShowing) {
                        $suggestionBox.show();
                        isShowing = true;
                    }
                    if ($input !== currentInput) {
                        $suggestionBox.detach();
                        $input.after($suggestionBox);
                        currentInput = $input;
                    }

                    // Return if no change
                    if (prevSuggestions.join() === suggestions.join()) {
                        prevSuggestions = suggestions;
                        return;
                    }

                    // Build suggestions
                    $suggestionBox[0].innerHTML = '';
                    for (let i = 0; i < suggestions.length; i++) {
                        var suggestion = document.createElement('li');
                        suggestion.textContent = suggestions[i];
                        suggestion.onclick = suggestionClick;
                        if (i === 0) {
                            suggestion.className = 'active'
                            active = 0;
                        };
                        $suggestionBox[0].appendChild(suggestion);
                    }

                    prevSuggestions = suggestions;
                }

                // Suggestion click event
                function suggestionClick(event) {
                    let text = this.textContent;
                    currentInput[0].value = text;
                    currentInput.focus();
                    $suggestionBox.hide();
                    isShowing = false;
                };

                // Get suggestions & cache
                function getSuggestions(input, url) {
                    let searchUrl = url + '?search=' + encodeURIComponent(input);

                    // Get from local cache if exists
                    if (localCache[searchUrl]) {
                        return new Promise((resolve, reject) => {
                            resolve(localCache[input]);
                        });
                    }

                    return $http.get(searchUrl).then((response) => {
                        localCache[input] = response.data;
                        return response.data;
                    });
                }

            }
        }
    }]);
};














