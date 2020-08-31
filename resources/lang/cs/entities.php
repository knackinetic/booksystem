<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nedávno vytvořené',
    'recently_created_pages' => 'Nedávno vytvořené stránky',
    'recently_updated_pages' => 'Nedávno aktualizované stránky',
    'recently_created_chapters' => 'Nedávno vytvořené kapitoly',
    'recently_created_books' => 'Nedávno vytvořené knihy',
    'recently_created_shelves' => 'Nedávno vytvořené knihovny',
    'recently_update' => 'Nedávno aktualizované',
    'recently_viewed' => 'Nedávno prohlížené',
    'recent_activity' => 'Nedávné činnosti',
    'create_now' => 'Vytvořte jí',
    'revisions' => 'Revize',
    'meta_revision' => 'Revize #:revisionCount',
    'meta_created' => 'Vytvořeno :timeLength',
    'meta_created_name' => 'Vytvořeno :timeLength uživatelem :user',
    'meta_updated' => 'Aktualizováno :timeLength',
    'meta_updated_name' => 'Aktualizováno :timeLength uživatelem :user',
    'entity_select' => 'Volba prvku',
    'images' => 'Obrázky',
    'my_recent_drafts' => 'Mé nedávné koncepty',
    'my_recently_viewed' => 'Naposledy navštívené',
    'no_pages_viewed' => 'Zatím jste nic nezhlédli',
    'no_pages_recently_created' => 'Zatím nebyly vytvořeny žádné stránky',
    'no_pages_recently_updated' => 'Zatím nebyly aktualizovány žádné stránky',
    'export' => 'Export',
    'export_html' => 'HTML balíček',
    'export_pdf' => 'PDF dokument',
    'export_text' => 'Textový dokument',

    // Permissions and restrictions
    'permissions' => 'Práva',
    'permissions_intro' => 'Zaškrtnutím překryjete práva v uživatelských rolích nastavením níže.',
    'permissions_enable' => 'Zapnout vlastní práva',
    'permissions_save' => 'Uložit práva',

    // Search
    'search_results' => 'Výsledky hledání',
    'search_total_results_found' => 'Nalezen :count výsledek|Nalezeny :count výsledky|Nalezeny :count výsledky|Nalezeny :count výsledky|Nalezeno :count výsledků',
    'search_clear' => 'Vyčistit hledání',
    'search_no_pages' => 'Žádná stránka neodpovídá hledanému výrazu',
    'search_for_term' => 'Hledat :term',
    'search_more' => 'Další výsledky',
    'search_filters' => 'Filtry hledání',
    'search_content_type' => 'Typ obsahu',
    'search_exact_matches' => 'Musí obsahovat',
    'search_tags' => 'Hledat štítky (tagy)',
    'search_options' => 'Volby',
    'search_viewed_by_me' => 'Zhlédnuto mnou',
    'search_not_viewed_by_me' => 'Nezhlédnuto mnou',
    'search_permissions_set' => 'Sada práv',
    'search_created_by_me' => 'Vytvořeno mnou',
    'search_updated_by_me' => 'Aktualizováno',
    'search_date_options' => 'Volby datumu',
    'search_updated_before' => 'Aktualizováno před',
    'search_updated_after' => 'Aktualizováno po',
    'search_created_before' => 'Vytvořeno před',
    'search_created_after' => 'Vytvořeno po',
    'search_set_date' => 'Datum',
    'search_update' => 'Hledat znovu',

    // Shelves
    'shelf' => 'Knihovna',
    'shelves' => 'Knihovny',
    'x_shelves' => ':count Shelf|:count Shelves',
    'shelves_long' => 'Knihovny',
    'shelves_empty' => 'Žádné knihovny nebyly vytvořeny',
    'shelves_create' => 'Vytvořit novou knihovnu',
    'shelves_popular' => 'Populární knihovny',
    'shelves_new' => 'Nové knihovny',
    'shelves_new_action' => 'Vytvořit knihovnu',
    'shelves_popular_empty' => 'Nejpopulárnější knihovny se objeví zde.',
    'shelves_new_empty' => 'Nejnovější knihovny se objeví zde.',
    'shelves_save' => 'Uložit knihovnu',
    'shelves_books' => 'Knihy v této knihovně',
    'shelves_add_books' => 'Přidat knihy do knihovny',
    'shelves_drag_books' => 'Knihu přidáte jejím přetažením sem.',
    'shelves_empty_contents' => 'Tato knihovna neobsahuje žádné knihy',
    'shelves_edit_and_assign' => 'Pro přidáni knih do knihovny stiskněte úprvy.',
    'shelves_edit_named' => 'Upravit knihovnu :name',
    'shelves_edit' => 'Upravit knihovnu',
    'shelves_delete' => 'Smazat knihovnu',
    'shelves_delete_named' => 'Smazat knihovnu :name',
    'shelves_delete_explain' => "Chystáte se smazat knihovnu ':name'. Knihy v ní obsažené zůstanou zachovány.",
    'shelves_delete_confirmation' => 'Opravdu chcete smazat tuto knihovnu?',
    'shelves_permissions' => 'Práva knihovny',
    'shelves_permissions_updated' => 'Práva knihovny byla aktualizována',
    'shelves_permissions_active' => 'Účinná práva knihovny',
    'shelves_copy_permissions_to_books' => 'Přenést práva na knihy',
    'shelves_copy_permissions' => 'Zkopírovat práva',
    'shelves_copy_permissions_explain' => 'Práva knihovny budou aplikována na všechny knihy v ní obsažené. Před použitím se ujistěte, že jste uložili změny práv knihovny.',
    'shelves_copy_permission_success' => 'Práva knihovny přenesena na knihy (celkem :count)',

    // Books
    'book' => 'Kniha',
    'books' => 'Knihy',
    'x_books' => ':count Kniha|:count Knihy|:count Knihy|:count Knihy|:count Knih',
    'books_empty' => 'Žádné knihy nebyly vytvořeny',
    'books_popular' => 'Populární knihy',
    'books_recent' => 'Nedávné knihy',
    'books_new' => 'Nové knihy',
    'books_new_action' => 'Vytvořit knihu',
    'books_popular_empty' => 'Zde budou zobrazeny nejpopulárnější knihy.',
    'books_new_empty' => 'Zde budou zobrazeny nově vytvořené knihy.',
    'books_create' => 'Vytvořit novou knihu',
    'books_delete' => 'Smazat knihu',
    'books_delete_named' => 'Smazat knihu :bookName',
    'books_delete_explain' => "Kniha ':bookName' bude smazána. Všechny její stránky a kapitoly budou taktéž smazány.",
    'books_delete_confirmation' => 'Opravdu chcete tuto knihu smazat.',
    'books_edit' => 'Upravit knihu',
    'books_edit_named' => 'Upravit knihu :bookName',
    'books_form_book_name' => 'Název knihy',
    'books_save' => 'Uložit knihu',
    'books_permissions' => 'Práva knihy',
    'books_permissions_updated' => 'Práva knihy upravena',
    'books_empty_contents' => 'V této knize nebyly vytvořeny žádné stránky ani kapitoly.',
    'books_empty_create_page' => 'Vytvořit novou stránku',
    'books_empty_sort_current_book' => 'Seřadit tuto knihu',
    'books_empty_add_chapter' => 'Přidat kapitolu',
    'books_permissions_active' => 'Účinná práva knihy',
    'books_search_this' => 'Prohledat tuto knihu',
    'books_navigation' => 'Obsah knihy',
    'books_sort' => 'Seřadit obsah knihy',
    'books_sort_named' => 'Seřadit knihu :bookName',
    'books_sort_name' => 'Seřadit podle jména',
    'books_sort_created' => 'Seřadit podle data vytvoření',
    'books_sort_updated' => 'Seřadit podle data úpravy',
    'books_sort_chapters_first' => 'Kapitoly na začátek',
    'books_sort_chapters_last' => 'Kapitoly na konec',
    'books_sort_show_other' => 'Ukázat ostatní knihy',
    'books_sort_save' => 'Uložit nové pořadí',

    // Chapters
    'chapter' => 'Kapitola',
    'chapters' => 'Kapitoly',
    'x_chapters' => ':count kapitola|:count kapitoly|:count kapitoly|:count kapitoly|:count kapitol',
    'chapters_popular' => 'Populární kapitoly',
    'chapters_new' => 'Nová kapitola',
    'chapters_create' => 'Vytvořit novou kapitolu',
    'chapters_delete' => 'Smazat kapitolu',
    'chapters_delete_named' => 'Smazat kapitolu :chapterName',
    'chapters_delete_explain' => "Kapitola ':chapterName' bude smazána. Všechny stránky v ní obsažené budou přesunuty přímo pod samotnou knihu.",
    'chapters_delete_confirm' => 'Opravdu chcete tuto kapitolu smazat?',
    'chapters_edit' => 'Upravit kapitolu',
    'chapters_edit_named' => 'Upravit kapitolu :chapterName',
    'chapters_save' => 'Uložit kapitolu',
    'chapters_move' => 'Přesunout kapitolu',
    'chapters_move_named' => 'Přesunout kapitolu :chapterName',
    'chapter_move_success' => 'Kapitola přesunuta do knihy :bookName',
    'chapters_permissions' => 'Práva kapitoly',
    'chapters_empty' => 'Tato kapitola neobsahuje žádné stránky',
    'chapters_permissions_active' => 'Účinná práva kapitoly',
    'chapters_permissions_success' => 'Práva kapitoly aktualizována',
    'chapters_search_this' => 'Prohledat tuto kapitolu',

    // Pages
    'page' => 'Stránka',
    'pages' => 'Stránky',
    'x_pages' => ':count strana|:count strany|:count strany|:count strany|:count stran',
    'pages_popular' => 'Populární stránky',
    'pages_new' => 'Nová stránka',
    'pages_attachments' => 'Přílohy',
    'pages_navigation' => 'Obsah stránky',
    'pages_delete' => 'Smazat stránku',
    'pages_delete_named' => 'Smazat stránku :pageName',
    'pages_delete_draft_named' => 'Smazat koncept stránky :pageName',
    'pages_delete_draft' => 'Smazat koncept stránky',
    'pages_delete_success' => 'Stránka smazána',
    'pages_delete_draft_success' => 'Koncept stránky smazán',
    'pages_delete_confirm' => 'Opravdu chcete tuto stránku smazat?',
    'pages_delete_draft_confirm' => 'Opravdu chcete tento koncept stránky smazat?',
    'pages_editing_named' => 'Úpravy stránky :pageName',
    'pages_edit_draft_options' => 'Možnosti konceptu',
    'pages_edit_save_draft' => 'Uložit koncept',
    'pages_edit_draft' => 'Upravit koncept stránky',
    'pages_editing_draft' => 'Úpravy konceptu',
    'pages_editing_page' => 'Úpravy stránky',
    'pages_edit_draft_save_at' => 'Koncept uložen v ',
    'pages_edit_delete_draft' => 'Smazat koncept',
    'pages_edit_discard_draft' => 'Zahodit koncept',
    'pages_edit_set_changelog' => 'Zadat komentář ke změnám',
    'pages_edit_enter_changelog_desc' => 'Zadejte stručný popis změn, které jste provedli.',
    'pages_edit_enter_changelog' => 'Vložit komentáře ke změnám',
    'pages_save' => 'Uložit stránku',
    'pages_title' => 'Nadpis stránky',
    'pages_name' => 'Název stránky',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Náhled',
    'pages_md_insert_image' => 'Vložit obrázek',
    'pages_md_insert_link' => 'Vložit odkaz na prvek',
    'pages_md_insert_drawing' => 'Vložit kresbu',
    'pages_not_in_chapter' => 'Stránka není součástí žádné kapitoly',
    'pages_move' => 'Přesunout stránku',
    'pages_move_success' => 'Stránka přesunuta do ":parentName"',
    'pages_copy' => 'Kopírovat stránku',
    'pages_copy_desination' => 'Cíl kopírování',
    'pages_copy_success' => 'Stránka byla úspěšně zkopírována',
    'pages_permissions' => 'Práva stránky',
    'pages_permissions_success' => 'Práva stránky aktualizována',
    'pages_revision' => 'Revize',
    'pages_revisions' => 'Revize stránky',
    'pages_revisions_named' => 'Revize stránky :pageName',
    'pages_revision_named' => 'Revize stránky :pageName',
    'pages_revisions_created_by' => 'Vytvořeno uživatelem',
    'pages_revisions_date' => 'Datum revize',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_changelog' => 'Komentáře změn',
    'pages_revisions_changes' => 'Změny',
    'pages_revisions_current' => 'Aktuální verze',
    'pages_revisions_preview' => 'Náhled',
    'pages_revisions_restore' => 'Obnovit',
    'pages_revisions_none' => 'Tato stránka nemá žádné revize',
    'pages_copy_link' => 'Zkopírovat odkaz',
    'pages_edit_content_link' => 'Upravit obsah',
    'pages_permissions_active' => 'Účinná práva stránky',
    'pages_initial_revision' => 'První vydání',
    'pages_initial_name' => 'Nová stránka',
    'pages_editing_draft_notification' => 'Právě upravujete koncept, který byl uložen před :timeDiff.',
    'pages_draft_edited_notification' => 'Tato stránka se od té doby změnila. Je doporučeno aktuální koncept zahodit.',
    'pages_draft_edit_active' => [
        'start_a' => 'Uživatelé začali upravovat tuto stránku (celkem :count)',
        'start_b' => 'Uživatel :userName začal upravovat tuto stránku',
        'time_a' => 'od doby, kdy byla tato stránky naposledy aktualizována',
        'time_b' => 'v posledních minutách (:minCount min.)',
        'message' => ':start :time. Dávejte pozor abyste nepřepsali změny ostatním!',
    ],
    'pages_draft_discarded' => 'Koncept byl zahozen. Editor nyní obsahuje aktuální verzi stránky.',
    'pages_specific' => 'Konkrétní stránka',
    'pages_is_template' => 'Šablona stránky',

    // Editor Sidebar
    'page_tags' => 'Štítky stránky',
    'chapter_tags' => 'Štítky kapitoly',
    'book_tags' => 'Štítky knihy',
    'shelf_tags' => 'Štítky knihovny',
    'tag' => 'Štítek',
    'tags' =>  'Štítky',
    'tag_name' =>  'Název štítku',
    'tag_value' => 'Hodnota štítku (volitelné)',
    'tags_explain' => "Přidejte si štítky pro lepší kategorizaci knih. \nŠtítky mohou nést i hodnotu pro detailnější klasifikaci.",
    'tags_add' => 'Přidat další štítek',
    'tags_remove' => 'Remove this tag',
    'attachments' => 'Přílohy',
    'attachments_explain' => 'Nahrajte soubory nebo připojte odkazy, které se zobrazí na stránce. Budou k nalezení v postranní liště.',
    'attachments_explain_instant_save' => 'Změny zde provedené se okamžitě ukládají.',
    'attachments_items' => 'Připojené položky',
    'attachments_upload' => 'Nahrát soubor',
    'attachments_link' => 'Připojit odkaz',
    'attachments_set_link' => 'Nastavit odkaz',
    'attachments_delete_confirm' => 'Stiskněte Smazat znovu pro potvrzení smazání.',
    'attachments_dropzone' => 'Přetáhněte sem soubory myší nebo sem klikněte pro vybrání souboru.',
    'attachments_no_files' => 'Žádné soubory nebyli nahrány',
    'attachments_explain_link' => 'Můžete pouze připojit odkaz, pokud nechcete nahrávat soubor přímo. Může to být odkaz na jinou stránku nebo na soubor v cloudu.',
    'attachments_link_name' => 'Název odkazu',
    'attachment_link' => 'Odkaz na přílohu',
    'attachments_link_url' => 'Odkaz na soubor',
    'attachments_link_url_hint' => 'URL stránky nebo souboru',
    'attach' => 'Připojit',
    'attachments_edit_file' => 'Upravit soubor',
    'attachments_edit_file_name' => 'Název souboru',
    'attachments_edit_drop_upload' => 'Přetáhněte sem soubor myší nebo klikněte pro nahrání nového a následné přepsání starého.',
    'attachments_order_updated' => 'Pořadí příloh aktualizováno',
    'attachments_updated_success' => 'Podrobnosti příloh aktualizovány',
    'attachments_deleted' => 'Příloha byla smazána',
    'attachments_file_uploaded' => 'Soubor byl úspěšně nahrán',
    'attachments_file_updated' => 'Soubor byl úspěšně aktualizován',
    'attachments_link_attached' => 'Odkaz úspěšně přiložen ke stránce',
    'templates' => 'Šablony',
    'templates_set_as_template' => 'Tato stránka je šablona',
    'templates_explain_set_as_template' => 'Tuto stránku můžete nastavit jako šablonu, aby byl její obsah využit při vytváření dalších stránek. Ostatní uživatelé budou moci tuto šablonu používat, pokud mají oprávnění k zobrazení této stránky.',
    'templates_replace_content' => 'Nahradit obsah stránky',
    'templates_append_content' => 'Přidat na konec stránky',
    'templates_prepend_content' => 'Přidat na začátek stránky',

    // Profile View
    'profile_user_for_x' => 'Uživatelem již :time',
    'profile_created_content' => 'Vytvořený obsah',
    'profile_not_created_pages' => ':userName nevytvořil/a žádný obsah',
    'profile_not_created_chapters' => ':userName nevytvořil/a žádné kapitoly',
    'profile_not_created_books' => ':userName nevytvořil/a žádné knihy',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'Komentář',
    'comments' => 'Komentáře',
    'comment_add' => 'Přidat komentář',
    'comment_placeholder' => 'Zanechte komentář zde',
    'comment_count' => '{0} Bez komentářů|{1} 1 komentář|[2,4] :count komentáře|[5,*] :count komentářů',
    'comment_save' => 'Uložit komentář',
    'comment_saving' => 'Ukládání komentáře...',
    'comment_deleting' => 'Mazání komentáře...',
    'comment_new' => 'Nový komentář',
    'comment_created' => 'komentováno :createDiff',
    'comment_updated' => 'Aktualizováno :updateDiff uživatelem :username',
    'comment_deleted_success' => 'Komentář smazán',
    'comment_created_success' => 'Komentář přidán',
    'comment_updated_success' => 'Komentář aktualizován',
    'comment_delete_confirm' => 'Opravdu chcete smazat tento komentář?',
    'comment_in_reply_to' => 'Odpověď na :commentId',

    // Revision
    'revision_delete_confirm' => 'Opravdu chcete smazat tuto revizi?',
    'revision_restore_confirm' => 'Opravdu chcete obnovit tuto revizi? Obsah aktuální stránky bude nahrazen.',
    'revision_delete_success' => 'Revize smazána',
    'revision_cannot_delete_latest' => 'Nelze smazat poslední revizi.'
];