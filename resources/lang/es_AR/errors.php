<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Ud. no tiene permisos para visualizar la página solicitada.',
    'permissionJson' => 'Ud. no tiene permisos para ejecutar la acción solicitada.',

    // Auth
    'error_user_exists_different_creds' => 'Un usuario con el email :email ya existe pero con credenciales diferentes.',
    'email_already_confirmed' => 'El email ya ha sido confirmado, Intente loguearse en la aplicación.',
    'email_confirmation_invalid' => 'Este token de confirmación no e válido o ya ha sido usado,Intente registrar uno nuevamente.',
    'email_confirmation_expired' => 'El token de confirmación ha expirado, Un nuevo email de confirmacón ha sido enviado.',
    'email_confirmation_awaiting' => 'La dirección de correo electrónico de la cuenta en uso debe ser confirmada',
    'ldap_fail_anonymous' => 'El acceso con LDAP ha fallado usando binding anónimo',
    'ldap_fail_authed' => 'El acceso LDAP usando el dn & password detallados',
    'ldap_extension_not_installed' => 'La extensión LDAP PHP no se encuentra instalada',
    'ldap_cannot_connect' => 'No se puede conectar con el servidor ldap, la conexión inicial ha fallado',
    'saml_already_logged_in' => 'Ya estás conectado',
    'saml_user_not_registered' => 'El usuario :name no está registrado y el registro automático está deshabilitado',
    'saml_no_email_address' => 'No se pudo encontrar una dirección de correo electrónico, para este usuario, en los datos proporcionados por el sistema de autenticación externo',
    'saml_invalid_response_id' => 'La solicitud del sistema de autenticación externo no está reconocida por un proceso iniciado por esta aplicación. Navegar hacia atrás después de un inicio de sesión podría causar este problema.',
    'saml_fail_authed' => 'El inicio de sesión con :system falló, el sistema no proporcionó una autorización correcta',
    'oidc_already_logged_in' => 'Already logged in',
    'oidc_user_not_registered' => 'The user :name is not registered and automatic registration is disabled',
    'oidc_no_email_address' => 'Could not find an email address, for this user, in the data provided by the external authentication system',
    'oidc_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'social_no_action_defined' => 'Acción no definida',
    'social_login_bad_response' => "SE recibió un Error durante el acceso con :socialAccount : \n:error",
    'social_account_in_use' => 'la cuenta :socialAccount ya se encuentra en uso, intente loguearse a través de la opcón :socialAccount .',
    'social_account_email_in_use' => 'El email :email ya se encuentra en uso. Si ud. ya dispone de una cuenta puede loguearse a través de su cuenta :socialAccount desde la configuración de perfil.',
    'social_account_existing' => 'La cuenta :socialAccount ya se encuentra asignada a su perfil.',
    'social_account_already_used_existing' => 'La cuenta :socialAccount ya se encuentra usada por otro usuario.',
    'social_account_not_used' => 'La cuenta :socialAccount no está asociada a ningún usuario. Por favor adjuntela a su configuración de perfil. ',
    'social_account_register_instructions' => 'Si no dispone de una cuenta, puede registrar una cuenta usando la opción de :socialAccount .',
    'social_driver_not_found' => 'Driver social no encontrado',
    'social_driver_not_configured' => 'Su configuración :socialAccount no es correcta.',
    'invite_token_expired' => 'El enace de la esta invitación expiró. Puede intentar restablecer la contraseña de su cuenta',

    // System
    'path_not_writable' => 'La ruta :filePath no pudo ser cargada. Asegurese de que es escribible por el servidor.',
    'cannot_get_image_from_url' => 'No se puede obtener la imagen desde :url',
    'cannot_create_thumbs' => 'El servidor no puede crear la imagen miniatura. Por favor chequee que tiene la extensión GD instalada.',
    'server_upload_limit' => 'El servidor no permite la subida de ficheros de este tamañ. Por favor intente con un fichero de menor tamañ.',
    'uploaded'  => 'El servidor no permite subir archivos de este tamaño. Por favor intente un tamaño menor.',
    'image_upload_error' => 'Ha ocurrido un error al subir la imagen',
    'image_upload_type_error' => 'El tipo de imagen subida es inválido.',
    'file_upload_timeout' => 'La carga del archivo ha caducado.',

    // Attachments
    'attachment_not_found' => 'No se encuentra el objeto adjunto',

    // Pages
    'page_draft_autosave_fail' => 'Fallo al guardar borrador. Asegurese de que tiene conexión a Internet antes de guardar este borrador',
    'page_custom_home_deletion' => 'No se puede eliminar una página cuando está configurada como página de inicio',

    // Entities
    'entity_not_found' => 'Entidad no encontrada',
    'bookshelf_not_found' => 'Estante no encontrado',
    'book_not_found' => 'Libro no encontrado',
    'page_not_found' => 'Página no encontrada',
    'chapter_not_found' => 'Capítulo no encontrado',
    'selected_book_not_found' => 'El libro seleccionado no fue encontrado',
    'selected_book_chapter_not_found' => 'El libro o capítulo seleccionado no fue encontrado',
    'guests_cannot_save_drafts' => 'Los invitados no pueden guardar los borradores',

    // Users
    'users_cannot_delete_only_admin' => 'No se puede borrar el único administrador',
    'users_cannot_delete_guest' => 'No se puede borrar el usuario invitado',

    // Roles
    'role_cannot_be_edited' => 'Este rol no puede ser editado',
    'role_system_cannot_be_deleted' => 'Este rol es un rol de sistema y no puede ser borrado',
    'role_registration_default_cannot_delete' => 'Este rol no puede ser borrado mientras sea el rol por defecto de registro',
    'role_cannot_remove_only_admin' => 'Este usuario es el único asignado al rol de administrador. Asigne el rol de administrador a otro usuario antes de intentar eliminarlo.',

    // Comments
    'comment_list' => 'Se produjo un error al obtener los comentarios.',
    'cannot_add_comment_to_draft' => 'No puede gregar comentarios a un borrador.',
    'comment_add' => 'Se produjo un error al agregar o actualizar el comentario.',
    'comment_delete' => 'Se produjo un error al borrar el comentario.',
    'empty_comment' => 'No se puede agregar un comentario vacío.',

    // Error pages
    '404_page_not_found' => 'Página no encontrada',
    'sorry_page_not_found' => 'Lo sentimos, la página que intenta acceder no pudo ser encontrada.',
    'sorry_page_not_found_permission_warning' => 'Si esperaba que esta página existiera, puede que no tenga permiso para verla.',
    'image_not_found' => 'No se encuentra la imagen',
    'image_not_found_subtitle' => 'Lo siento, no se pudo encontrar la imagen que busca.',
    'image_not_found_details' => 'Si esperaba que esta imagen exista es probable que se haya eliminado.',
    'return_home' => 'Volver al home',
    'error_occurred' => 'Ha ocurrido un error',
    'app_down' => 'La aplicación :appName se encuentra caída en este momento',
    'back_soon' => 'Volverá a estar operativa en corto tiempo.',

    // API errors
    'api_no_authorization_found' => 'No se encontró ningún token de autorización en la solicitud',
    'api_bad_authorization_format' => 'Se ha encontrado un token de autorización en la solicitud pero el formato era incorrecto',
    'api_user_token_not_found' => 'No se ha encontrado un token API que corresponda con el token de autorización proporcionado',
    'api_incorrect_token_secret' => 'El secreto proporcionado para el token API usado es incorrecto',
    'api_user_no_api_permission' => 'El propietario del token API usado no tiene permiso para hacer llamadas API',
    'api_user_token_expired' => 'El token de autorización usado ha caducado',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Error al enviar un email de prueba:',

];
