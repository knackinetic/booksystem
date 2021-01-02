<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Kürzlich angelegt',
    'recently_created_pages' => 'Kürzlich angelegte Seiten',
    'recently_updated_pages' => 'Kürzlich aktualisierte Seiten',
    'recently_created_chapters' => 'Kürzlich angelegte Kapitel',
    'recently_created_books' => 'Kürzlich angelegte Bücher',
    'recently_created_shelves' => 'Kürzlich angelegte Regale',
    'recently_update' => 'Kürzlich aktualisiert',
    'recently_viewed' => 'Kürzlich angesehen',
    'recent_activity' => 'Kürzliche Aktivität',
    'create_now' => 'Jetzt anlegen',
    'revisions' => 'Versionen',
    'meta_revision' => 'Version #:revisionCount',
    'meta_created' => 'Erstellt: :timeLength',
    'meta_created_name' => 'Erstellt: :timeLength von :user',
    'meta_updated' => 'Zuletzt aktualisiert: :timeLength',
    'meta_updated_name' => 'Zuletzt aktualisiert: :timeLength von :user',
    'meta_owned_name' => 'Owned by :user',
    'entity_select' => 'Eintrag auswählen',
    'images' => 'Bilder',
    'my_recent_drafts' => 'Meine kürzlichen Entwürfe',
    'my_recently_viewed' => 'Kürzlich von mir angesehen',
    'no_pages_viewed' => 'Sie haben bisher keine Seiten angesehen.',
    'no_pages_recently_created' => 'Sie haben bisher keine Seiten angelegt.',
    'no_pages_recently_updated' => 'Sie haben bisher keine Seiten aktualisiert.',
    'export' => 'Exportieren',
    'export_html' => 'HTML-Datei',
    'export_pdf' => 'PDF-Datei',
    'export_text' => 'Textdatei',

    // Permissions and restrictions
    'permissions' => 'Berechtigungen',
    'permissions_intro' => 'Wenn individuelle Berechtigungen aktiviert werden, überschreiben diese Einstellungen durch Rollen zugewiesene Berechtigungen.',
    'permissions_enable' => 'Individuelle Berechtigungen aktivieren',
    'permissions_save' => 'Berechtigungen speichern',
    'permissions_owner' => 'Owner',

    // Search
    'search_results' => 'Suchergebnisse',
    'search_total_results_found' => ':count Ergebnis gefunden|:count Ergebnisse gesamt',
    'search_clear' => 'Filter löschen',
    'search_no_pages' => 'Keine Seiten gefunden',
    'search_for_term' => 'Nach :term suchen',
    'search_more' => 'Mehr Ergebnisse',
    'search_advanced' => 'Erweiterte Suche',
    'search_terms' => 'Suchbegriffe',
    'search_content_type' => 'Inhaltstyp',
    'search_exact_matches' => 'Exakte Treffer',
    'search_tags' => 'Nach Schlagwort suchen',
    'search_options' => 'Optionen',
    'search_viewed_by_me' => 'Schon von mir angesehen',
    'search_not_viewed_by_me' => 'Noch nicht von mir angesehen',
    'search_permissions_set' => 'Berechtigungen gesetzt',
    'search_created_by_me' => 'Von mir erstellt',
    'search_updated_by_me' => 'Von mir aktualisiert',
    'search_date_options' => 'Datums Optionen',
    'search_updated_before' => 'Aktualisiert vor',
    'search_updated_after' => 'Aktualisiert nach',
    'search_created_before' => 'Erstellt vor',
    'search_created_after' => 'Erstellt nach',
    'search_set_date' => 'Datum auswählen',
    'search_update' => 'Suche aktualisieren',

    // Shelves
    'shelf' => 'Regal',
    'shelves' => 'Regale',
    'x_shelves' => ':count Regal|:count Regale',
    'shelves_long' => 'Bücherregal',
    'shelves_empty' => 'Es wurden noch keine Regale angelegt',
    'shelves_create' => 'Erzeuge ein Regal',
    'shelves_popular' => 'Beliebte Regale',
    'shelves_new' => 'Kürzlich erstellte Regale',
    'shelves_new_action' => 'Neues Regal',
    'shelves_popular_empty' => 'Die beliebtesten Regale werden hier angezeigt.',
    'shelves_new_empty' => 'Die neusten Regale werden hier angezeigt.',
    'shelves_save' => 'Regal speichern',
    'shelves_books' => 'Bücher in diesem Regal',
    'shelves_add_books' => 'Buch zu diesem Regal hinzufügen',
    'shelves_drag_books' => 'Bücher hier hin ziehen um sie dem Regal hinzuzufügen',
    'shelves_empty_contents' => 'Diesem Regal sind keine Bücher zugewiesen',
    'shelves_edit_and_assign' => 'Regal bearbeiten um Bücher hinzuzufügen',
    'shelves_edit_named' => 'Bücherregal :name bearbeiten',
    'shelves_edit' => 'Bücherregal bearbeiten',
    'shelves_delete' => 'Bücherregal löschen',
    'shelves_delete_named' => 'Bücherregal :name löschen',
    'shelves_delete_explain' => "Sie sind im Begriff das Bücherregal mit dem Namen ':name' zu löschen. Enthaltene Bücher werden nicht gelöscht.",
    'shelves_delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Bücherregal löschen wollen?',
    'shelves_permissions' => 'Regal-Berechtigungen',
    'shelves_permissions_updated' => 'Regal-Berechtigungen aktualisiert',
    'shelves_permissions_active' => 'Regal-Berechtigungen aktiv',
    'shelves_copy_permissions_to_books' => 'Kopiere die Berechtigungen zum Buch',
    'shelves_copy_permissions' => 'Berechtigungen kopieren',
    'shelves_copy_permissions_explain' => 'Hiermit werden die Berechtigungen des aktuellen Regals auf alle enthaltenen Bücher übertragen. Überprüfen Sie vor der Aktivierung, ob alle Berechtigungsänderungen am aktuellen Regal gespeichert wurden.',
    'shelves_copy_permission_success' => 'Regal-Berechtigungen wurden zu :count Büchern kopiert',

    // Books
    'book' => 'Buch',
    'books' => 'Bücher',
    'x_books' => ':count Buch|:count Bücher',
    'books_empty' => 'Keine Bücher vorhanden',
    'books_popular' => 'Beliebte Bücher',
    'books_recent' => 'Kürzlich angesehene Bücher',
    'books_new' => 'Neue Bücher',
    'books_new_action' => 'Neues Buch',
    'books_popular_empty' => 'Die beliebtesten Bücher werden hier angezeigt.',
    'books_new_empty' => 'Die neusten Bücher werden hier angezeigt.',
    'books_create' => 'Neues Buch erstellen',
    'books_delete' => 'Buch löschen',
    'books_delete_named' => 'Buch ":bookName" löschen',
    'books_delete_explain' => 'Das Buch ":bookName" wird gelöscht und alle zugehörigen Kapitel und Seiten entfernt.',
    'books_delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Buch löschen möchten?',
    'books_edit' => 'Buch bearbeiten',
    'books_edit_named' => 'Buch ":bookName" bearbeiten',
    'books_form_book_name' => 'Name des Buches',
    'books_save' => 'Buch speichern',
    'books_permissions' => 'Buch-Berechtigungen',
    'books_permissions_updated' => 'Buch-Berechtigungen aktualisiert',
    'books_empty_contents' => 'Es sind noch keine Seiten oder Kapitel zu diesem Buch hinzugefügt worden.',
    'books_empty_create_page' => 'Neue Seite anlegen',
    'books_empty_sort_current_book' => 'Aktuelles Buch sortieren',
    'books_empty_add_chapter' => 'Neues Kapitel hinzufügen',
    'books_permissions_active' => 'Buch-Berechtigungen aktiv',
    'books_search_this' => 'Dieses Buch durchsuchen',
    'books_navigation' => 'Buchnavigation',
    'books_sort' => 'Buchinhalte sortieren',
    'books_sort_named' => 'Buch ":bookName" sortieren',
    'books_sort_name' => 'Sortieren nach Namen',
    'books_sort_created' => 'Sortieren nach Erstellungsdatum',
    'books_sort_updated' => 'Sortieren nach Aktualisierungsdatum',
    'books_sort_chapters_first' => 'Kapitel zuerst',
    'books_sort_chapters_last' => 'Kapitel zuletzt',
    'books_sort_show_other' => 'Andere Bücher anzeigen',
    'books_sort_save' => 'Neue Reihenfolge speichern',

    // Chapters
    'chapter' => 'Kapitel',
    'chapters' => 'Kapitel',
    'x_chapters' => ':count Kapitel',
    'chapters_popular' => 'Beliebte Kapitel',
    'chapters_new' => 'Neues Kapitel',
    'chapters_create' => 'Neues Kapitel anlegen',
    'chapters_delete' => 'Kapitel entfernen',
    'chapters_delete_named' => 'Kapitel ":chapterName" entfernen',
    'chapters_delete_explain' => 'Dies löscht das Kapitel mit dem Namen \':chapterName\'. Alle Seiten, die innerhalb dieses Kapitels existieren, werden ebenfalls gelöscht.',
    'chapters_delete_confirm' => 'Sind Sie sicher, dass Sie dieses Kapitel löschen möchten?',
    'chapters_edit' => 'Kapitel bearbeiten',
    'chapters_edit_named' => 'Kapitel ":chapterName" bearbeiten',
    'chapters_save' => 'Kapitel speichern',
    'chapters_move' => 'Kapitel verschieben',
    'chapters_move_named' => 'Kapitel ":chapterName" verschieben',
    'chapter_move_success' => 'Das Kapitel wurde in das Buch ":bookName" verschoben.',
    'chapters_permissions' => 'Kapitel-Berechtigungen',
    'chapters_empty' => 'Aktuell sind keine Kapitel diesem Buch hinzugefügt worden.',
    'chapters_permissions_active' => 'Kapitel-Berechtigungen aktiv',
    'chapters_permissions_success' => 'Kapitel-Berechtigungenen aktualisisert',
    'chapters_search_this' => 'Dieses Kapitel durchsuchen',

    // Pages
    'page' => 'Seite',
    'pages' => 'Seiten',
    'x_pages' => ':count Seite|:count Seiten',
    'pages_popular' => 'Beliebte Seiten',
    'pages_new' => 'Neue Seite',
    'pages_attachments' => 'Anhänge',
    'pages_navigation' => 'Seitennavigation',
    'pages_delete' => 'Seite löschen',
    'pages_delete_named' => 'Seite ":pageName" löschen',
    'pages_delete_draft_named' => 'Seitenentwurf von ":pageName" löschen',
    'pages_delete_draft' => 'Seitenentwurf löschen',
    'pages_delete_success' => 'Seite gelöscht',
    'pages_delete_draft_success' => 'Seitenentwurf gelöscht',
    'pages_delete_confirm' => 'Sind Sie sicher, dass Sie diese Seite löschen möchen?',
    'pages_delete_draft_confirm' => 'Sind Sie sicher, dass Sie diesen Seitenentwurf löschen möchten?',
    'pages_editing_named' => 'Seite ":pageName" bearbeiten',
    'pages_edit_draft_options' => 'Entwurfsoptionen',
    'pages_edit_save_draft' => 'Entwurf speichern',
    'pages_edit_draft' => 'Seitenentwurf bearbeiten',
    'pages_editing_draft' => 'Seitenentwurf bearbeiten',
    'pages_editing_page' => 'Seite bearbeiten',
    'pages_edit_draft_save_at' => 'Entwurf gespeichert um ',
    'pages_edit_delete_draft' => 'Entwurf löschen',
    'pages_edit_discard_draft' => 'Entwurf verwerfen',
    'pages_edit_set_changelog' => 'Änderungsprotokoll hinzufügen',
    'pages_edit_enter_changelog_desc' => 'Bitte geben Sie eine kurze Zusammenfassung Ihrer Änderungen ein',
    'pages_edit_enter_changelog' => 'Änderungsprotokoll eingeben',
    'pages_save' => 'Seite speichern',
    'pages_title' => 'Seitentitel',
    'pages_name' => 'Seitenname',
    'pages_md_editor' => 'Redakteur',
    'pages_md_preview' => 'Vorschau',
    'pages_md_insert_image' => 'Bild einfügen',
    'pages_md_insert_link' => 'Link zu einem Objekt einfügen',
    'pages_md_insert_drawing' => 'Zeichnung einfügen',
    'pages_not_in_chapter' => 'Seite ist in keinem Kapitel',
    'pages_move' => 'Seite verschieben',
    'pages_move_success' => 'Seite nach ":parentName" verschoben',
    'pages_copy' => 'Seite kopieren',
    'pages_copy_desination' => 'Ziel',
    'pages_copy_success' => 'Seite erfolgreich kopiert',
    'pages_permissions' => 'Seiten Berechtigungen',
    'pages_permissions_success' => 'Seiten Berechtigungen aktualisiert',
    'pages_revision' => 'Version',
    'pages_revisions' => 'Seitenversionen',
    'pages_revisions_named' => 'Seitenversionen von ":pageName"',
    'pages_revision_named' => 'Seitenversion von ":pageName"',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'Erstellt von',
    'pages_revisions_date' => 'Versionsdatum',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Änderungen',
    'pages_revisions_changelog' => 'Änderungsprotokoll',
    'pages_revisions_changes' => 'Änderungen',
    'pages_revisions_current' => 'Aktuelle Version',
    'pages_revisions_preview' => 'Vorschau',
    'pages_revisions_restore' => 'Wiederherstellen',
    'pages_revisions_none' => 'Diese Seite hat keine älteren Versionen.',
    'pages_copy_link' => 'Link kopieren',
    'pages_edit_content_link' => 'Inhalt bearbeiten',
    'pages_permissions_active' => 'Seiten-Berechtigungen aktiv',
    'pages_initial_revision' => 'Erste Veröffentlichung',
    'pages_initial_name' => 'Neue Seite',
    'pages_editing_draft_notification' => 'Sie bearbeiten momenten einen Entwurf, der zuletzt :timeDiff gespeichert wurde.',
    'pages_draft_edited_notification' => 'Diese Seite wurde seit diesem Zeitpunkt verändert. Wir empfehlen Ihnen, diesen Entwurf zu verwerfen.',
    'pages_draft_edit_active' => [
        'start_a' => ':count Benutzer bearbeiten derzeit diese Seite.',
        'start_b' => ':userName bearbeitet jetzt diese Seite.',
        'time_a' => 'seit die Seiten zuletzt aktualisiert wurden.',
        'time_b' => 'in den letzten :minCount Minuten',
        'message' => ':start :time. Achten Sie darauf, keine Änderungen von anderen Benutzern zu überschreiben!',
    ],
    'pages_draft_discarded' => 'Entwurf verworfen. Der aktuelle Seiteninhalt wurde geladen.',
    'pages_specific' => 'Spezifische Seite',
    'pages_is_template' => 'Seitenvorlage',

    // Editor Sidebar
    'page_tags' => 'Seiten-Schlagwörter',
    'chapter_tags' => 'Kapitel-Schlagwörter',
    'book_tags' => 'Buch-Schlagwörter',
    'shelf_tags' => 'Regal-Schlagwörter',
    'tag' => 'Schlagwort',
    'tags' =>  'Schlagwörter',
    'tag_name' =>  'Schlagwort Name',
    'tag_value' => 'Inhalt (Optional)',
    'tags_explain' => "Fügen Sie Schlagwörter hinzu, um Ihren Inhalt zu kategorisieren.\nSie können einen erklärenden Inhalt hinzufügen, um eine genauere Unterteilung vorzunehmen.",
    'tags_add' => 'Weiteres Schlagwort hinzufügen',
    'tags_remove' => 'Diesen Tag entfernen',
    'attachments' => 'Anhänge',
    'attachments_explain' => 'Sie können auf Ihrer Seite Dateien hochladen oder Links hinzufügen. Diese werden in der Seitenleiste angezeigt.',
    'attachments_explain_instant_save' => 'Änderungen werden direkt gespeichert.',
    'attachments_items' => 'Angefügte Elemente',
    'attachments_upload' => 'Datei hochladen',
    'attachments_link' => 'Link hinzufügen',
    'attachments_set_link' => 'Link setzen',
    'attachments_delete' => 'Sind Sie sicher, dass Sie diesen Anhang löschen möchten?',
    'attachments_dropzone' => 'Ziehen Sie Dateien hierher oder klicken Sie, um eine Datei auszuwählen',
    'attachments_no_files' => 'Es wurden bisher keine Dateien hochgeladen.',
    'attachments_explain_link' => 'Wenn Sie keine Datei hochladen möchten, können Sie stattdessen einen Link hinzufügen. Dieser Link kann auf eine andere Seite oder eine Datei im Internet weisen.',
    'attachments_link_name' => 'Link-Name',
    'attachment_link' => 'Link zum Anhang',
    'attachments_link_url' => 'Link zu einer Datei',
    'attachments_link_url_hint' => 'URL einer Seite oder Datei',
    'attach' => 'Hinzufügen',
    'attachments_insert_link' => 'Link zum Anhang auf Seite einfügen',
    'attachments_edit_file' => 'Datei bearbeiten',
    'attachments_edit_file_name' => 'Dateiname',
    'attachments_edit_drop_upload' => 'Ziehen Sie Dateien hierher, um diese hochzuladen und zu überschreiben',
    'attachments_order_updated' => 'Reihenfolge der Anhänge aktualisiert',
    'attachments_updated_success' => 'Anhangdetails aktualisiert',
    'attachments_deleted' => 'Anhang gelöscht',
    'attachments_file_uploaded' => 'Datei erfolgreich hochgeladen',
    'attachments_file_updated' => 'Datei erfolgreich aktualisiert',
    'attachments_link_attached' => 'Link erfolgreich der Seite hinzugefügt',
    'templates' => 'Vorlagen',
    'templates_set_as_template' => 'Seite ist eine Vorlage',
    'templates_explain_set_as_template' => 'Sie können diese Seite als Vorlage festlegen, damit deren Inhalt beim Erstellen anderer Seiten verwendet werden kann. Andere Benutzer können diese Vorlage verwenden, wenn sie die Zugriffsrechte für diese Seite haben.',
    'templates_replace_content' => 'Seiteninhalt ersetzen',
    'templates_append_content' => 'An Seiteninhalt anhängen',
    'templates_prepend_content' => 'Seiteninhalt voranstellen',

    // Profile View
    'profile_user_for_x' => 'Benutzer seit :time',
    'profile_created_content' => 'Erstellte Inhalte',
    'profile_not_created_pages' => ':userName hat noch keine Seiten erstellt.',
    'profile_not_created_chapters' => ':userName hat noch keine Kapitel erstellt.',
    'profile_not_created_books' => ':userName hat noch keine Bücher erstellt.',
    'profile_not_created_shelves' => ':userName hat noch keine Regale erstellt.',

    // Comments
    'comment' => 'Kommentar',
    'comments' => 'Kommentare',
    'comment_add' => 'Kommentieren',
    'comment_placeholder' => 'Geben Sie hier Ihre Kommentare ein (Markdown unterstützt)',
    'comment_count' => '{0} Keine Kommentare|{1} 1 Kommentar|[2,*] :count Kommentare',
    'comment_save' => 'Kommentar speichern',
    'comment_saving' => 'Kommentar wird gespeichert...',
    'comment_deleting' => 'Kommentar wird gelöscht...',
    'comment_new' => 'Neuer Kommentar',
    'comment_created' => ':createDiff kommentiert',
    'comment_updated' => ':updateDiff aktualisiert von :username',
    'comment_deleted_success' => 'Kommentar gelöscht',
    'comment_created_success' => 'Kommentar hinzugefügt',
    'comment_updated_success' => 'Kommentar aktualisiert',
    'comment_delete_confirm' => 'Möchten Sie diesen Kommentar wirklich löschen?',
    'comment_in_reply_to' => 'Antwort auf :commentId',

    // Revision
    'revision_delete_confirm' => 'Sind Sie sicher, dass Sie diese Revision löschen wollen?',
    'revision_restore_confirm' => 'Sind Sie sicher, dass Sie diese Revision wiederherstellen wollen? Der aktuelle Seiteninhalt wird ersetzt.',
    'revision_delete_success' => 'Revision gelöscht',
    'revision_cannot_delete_latest' => 'Die letzte Version kann nicht gelöscht werden.'
];