<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Baru saja dibuat',
    'recently_created_pages' => 'Halaman baru saja dibuat',
    'recently_updated_pages' => 'Halaman baru saja diperbaharui',
    'recently_created_chapters' => 'Bab baru saja dibuat',
    'recently_created_books' => 'Buku baru saja dibuat',
    'recently_created_shelves' => 'Rak baru saja dibuat',
    'recently_update' => 'Baru saja diperbaharui',
    'recently_viewed' => 'Baru saja dilihat',
    'recent_activity' => 'Aktivitas Terbaru',
    'create_now' => 'Buat Sekarang',
    'revisions' => 'Revisi',
    'meta_revision' => 'Revisi #:revisionCount',
    'meta_created' => 'Dibuat :timeLength',
    'meta_created_name' => 'Dibuat :timeLength oleh :user',
    'meta_updated' => 'Diperbaharui :timeLength',
    'meta_updated_name' => 'Diperbaharui :timeLength oleh :user',
    'meta_owned_name' => 'Dimiliki oleh :user',
    'entity_select' => 'Pilihan Entitas',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Gambar-gambar',
    'my_recent_drafts' => 'Draf Terbaru Saya',
    'my_recently_viewed' => 'Baru saja saya lihat',
    'my_most_viewed_favourites' => 'Favorit Saya yang Paling Banyak Dilihat',
    'my_favourites' => 'Favoritku',
    'no_pages_viewed' => 'Anda belum melihat halaman apa pun',
    'no_pages_recently_created' => 'Tidak ada halaman yang baru saja dibuat',
    'no_pages_recently_updated' => 'Tidak ada halaman yang baru-baru ini diperbarui',
    'export' => 'Ekspor',
    'export_html' => 'File Web Berisi',
    'export_pdf' => 'Dokumen PDF',
    'export_text' => 'Dokumen Teks Biasa',
    'export_md' => 'File Markdown',

    // Permissions and restrictions
    'permissions' => 'Izin',
    'permissions_intro' => 'Setelah diaktifkan, izin ini akan menjadi prioritas di atas izin peran yang ditetapkan.',
    'permissions_enable' => 'Aktifkan Izin Kustom',
    'permissions_save' => 'Simpan Izin',
    'permissions_owner' => 'Pemilik',

    // Search
    'search_results' => 'Hasil Pencarian',
    'search_total_results_found' => ':count hasil hitung ditemukan |:count hasil hitung total tang di temukan',
    'search_clear' => 'Bersihkan pencarian',
    'search_no_pages' => 'Tidak ada halaman yang cocok dengan pencarian ini',
    'search_for_term' => 'Pencarian untuk :term',
    'search_more' => 'Hasil lebih',
    'search_advanced' => 'Pencarian Lanjutan',
    'search_terms' => 'Cari Istilah',
    'search_content_type' => 'Tipe Konten',
    'search_exact_matches' => 'Pertandingan Persis',
    'search_tags' => 'Pencarian Tag',
    'search_options' => 'Pilihan',
    'search_viewed_by_me' => 'Dilihat oleh saya',
    'search_not_viewed_by_me' => 'Tidak dilihat oleh saya',
    'search_permissions_set' => 'Izin ditetapkan',
    'search_created_by_me' => 'Dibuat oleh saya',
    'search_updated_by_me' => 'Diperbaharui oleh saya',
    'search_owned_by_me' => 'Milik Saya',
    'search_date_options' => 'Opsi Tanggal',
    'search_updated_before' => 'Diperbaharui sebelum',
    'search_updated_after' => 'Diperbaharui setelah',
    'search_created_before' => 'Dibuat sebelum',
    'search_created_after' => 'Dibuat setelah',
    'search_set_date' => 'Atur Tanggal',
    'search_update' => 'Perbaharui pencarian',

    // Shelves
    'shelf' => 'Rak',
    'shelves' => 'Rak',
    'x_shelves' => ':count Rak|:count Rak',
    'shelves_long' => 'Rak Buku',
    'shelves_empty' => 'Tidak ada rak yang dibuat',
    'shelves_create' => 'Buat Rak baru',
    'shelves_popular' => 'Rak Terpopuler',
    'shelves_new' => 'Rak Baru',
    'shelves_new_action' => 'Rak Baru',
    'shelves_popular_empty' => 'Rak paling populer akan muncul di sini.',
    'shelves_new_empty' => 'Rak yang paling baru dibuat akan muncul di sini.',
    'shelves_save' => 'Simpan Rak',
    'shelves_books' => 'Buku di rak ini',
    'shelves_add_books' => 'Tambahkan buku ke rak ini',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Rak ini tidak memiliki buku yang ditugaskan padanya',
    'shelves_edit_and_assign' => 'Edit rak untuk menetapkan buku',
    'shelves_edit_named' => 'Edit Rak Buku :name',
    'shelves_edit' => 'Edit Rak Buku',
    'shelves_delete' => 'Hapus rak buku',
    'shelves_delete_named' => 'Hapus rak buku :name',
    'shelves_delete_explain' => "Ini akan menghapus rak buku dengan nama ':name'. Buku yang berisi tidak akan dihapus.",
    'shelves_delete_confirmation' => 'Apakah Anda yakin ingin menghapus rak buku ini?',
    'shelves_permissions' => 'Izin Rak Buku',
    'shelves_permissions_updated' => 'Izin Rak Buku Diperbarui',
    'shelves_permissions_active' => 'Izin Rak Buku Aktif',
    'shelves_permissions_cascade_warning' => 'Permissions on bookshelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => 'Salin Izin ke Buku',
    'shelves_copy_permissions' => 'Salin Izin',
    'shelves_copy_permissions_explain' => 'Ini akan menerapkan setelan izin rak buku ini saat ini ke semua buku yang ada di dalamnya. Sebelum mengaktifkan, pastikan setiap perubahan pada izin rak buku ini telah disimpan.',
    'shelves_copy_permission_success' => 'Izin rak buku disalin ke :count buku',

    // Books
    'book' => 'Buku',
    'books' => 'Semua Buku',
    'x_books' => ':count Buku|:count Semua Buku',
    'books_empty' => 'Tidak ada buku yang telah dibuat',
    'books_popular' => 'Buku Populer',
    'books_recent' => 'Buku Terbaru',
    'books_new' => 'Buku baru',
    'books_new_action' => 'Buku baru',
    'books_popular_empty' => 'Buku paling populer akan muncul di sini.',
    'books_new_empty' => 'The most recently created books will appear here.',
    'books_create' => 'Buat Buku Baru',
    'books_delete' => 'Hapus Buku',
    'books_delete_named' => 'Hapus buku :bookName',
    'books_delete_explain' => 'Ini akan menghapus buku dengan nama \': bookName\'. Semua halaman dan bab akan dihapus.',
    'books_delete_confirmation' => 'Apakah Anda yakin ingin menghapus buku ini?',
    'books_edit' => 'Edit Buku',
    'books_edit_named' => 'Sunting Buku :bookName',
    'books_form_book_name' => 'Nama Buku',
    'books_save' => 'Simpan Buku',
    'books_permissions' => 'Izin Buku',
    'books_permissions_updated' => 'Izin Buku Diperbarui',
    'books_empty_contents' => 'Tidak ada halaman atau bab yang telah dibuat untuk buku ini.',
    'books_empty_create_page' => 'Buat halaman baru',
    'books_empty_sort_current_book' => 'Sortir buku saat ini',
    'books_empty_add_chapter' => 'Tambahkan satu bab',
    'books_permissions_active' => 'Izin Buku Aktif',
    'books_search_this' => 'Cari buku ini',
    'books_navigation' => 'Navigasi Buku',
    'books_sort' => 'Sortir Isi Buku',
    'books_sort_named' => 'Sortir Buku :bookName',
    'books_sort_name' => 'Diurutkan berdasarkan nama',
    'books_sort_created' => 'Urutkan berdasarkan Tanggal Dibuat',
    'books_sort_updated' => 'Urutkan berdasarkan Tanggal Diperbarui',
    'books_sort_chapters_first' => 'Bab Pertama',
    'books_sort_chapters_last' => 'Bab Terakhir',
    'books_sort_show_other' => 'Tunjukkan Buku Lain',
    'books_sort_save' => 'Simpan Pesanan Baru',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Bab',
    'chapters' => 'Bab',
    'x_chapters' => ':count Bab |:count Bab',
    'chapters_popular' => 'Bab Populer',
    'chapters_new' => 'Bab Baru',
    'chapters_create' => 'Buat Bab Baru',
    'chapters_delete' => 'Hapur Bab',
    'chapters_delete_named' => 'Hapus bab dengan nama :chapterName',
    'chapters_delete_explain' => 'Ini akan menghapus chapter dengan nama \':chapterName\'. Semua halaman yang ada dalam bab ini juga akan dihapus.',
    'chapters_delete_confirm' => 'Anda yakin ingin menghapus bab ini?',
    'chapters_edit' => 'Edit Bab',
    'chapters_edit_named' => 'Sunting Bab :chapterName',
    'chapters_save' => 'Simpan Bab',
    'chapters_move' => 'Pindahkan Bab',
    'chapters_move_named' => 'Pindahkan Bab :chapterName',
    'chapter_move_success' => 'Bab dipindahkan ke :bookName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Izin Bab',
    'chapters_empty' => 'Saat ini tidak ada halaman dalam bab ini.',
    'chapters_permissions_active' => 'Izin Bab Aktif',
    'chapters_permissions_success' => 'Izin Bab Diperbarui',
    'chapters_search_this' => 'Cari bab ini',

    // Pages
    'page' => 'Halaman',
    'pages' => 'Semua Halaman',
    'x_pages' => ':count Halaman|:count Semua Halaman',
    'pages_popular' => 'Halaman Populer',
    'pages_new' => 'Lembaran baru',
    'pages_attachments' => 'Lampiran',
    'pages_navigation' => 'Halaman Navigasi',
    'pages_delete' => 'Hapus Halaman',
    'pages_delete_named' => 'Hapus Halaman :pageName',
    'pages_delete_draft_named' => 'Hapus Halaman Draf :pageName',
    'pages_delete_draft' => 'Hapus Halaman Draf',
    'pages_delete_success' => 'Halaman dihapus',
    'pages_delete_draft_success' => 'Halaman draf dihapus',
    'pages_delete_confirm' => 'Anda yakin ingin menghapus halaman ini?',
    'pages_delete_draft_confirm' => 'Anda yakin ingin menghapus halaman draf ini?',
    'pages_editing_named' => 'Menyunting Halaman :pageName',
    'pages_edit_draft_options' => 'Opsi Draf',
    'pages_edit_save_draft' => 'Simpan Draf',
    'pages_edit_draft' => 'Edit Halaman Draf',
    'pages_editing_draft' => 'Mengedit Draf',
    'pages_editing_page' => 'Mengedit Draf',
    'pages_edit_draft_save_at' => 'Draf disimpan pada ',
    'pages_edit_delete_draft' => 'Hapus Draf',
    'pages_edit_discard_draft' => 'Buang Draf',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Atur Changelog',
    'pages_edit_enter_changelog_desc' => 'Masukkan deskripsi singkat tentang perubahan yang Anda buat',
    'pages_edit_enter_changelog' => 'Masuk ke Changelog',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Simpan Halaman',
    'pages_title' => 'Judul Halaman',
    'pages_name' => 'Nama Halaman',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Pratinjau',
    'pages_md_insert_image' => 'Sisipkan Gambar',
    'pages_md_insert_link' => 'Sisipkan Tautan Entitas',
    'pages_md_insert_drawing' => 'Sisipkan Gambar',
    'pages_not_in_chapter' => 'Halaman tidak dalam satu bab',
    'pages_move' => 'Pindahkan Halaman',
    'pages_move_success' => 'Halaman dipindahkan ke ":parentName"',
    'pages_copy' => 'Salin Halaman',
    'pages_copy_desination' => 'Salin Tujuan',
    'pages_copy_success' => 'Halaman berhasil disalin',
    'pages_permissions' => 'Izin Halaman',
    'pages_permissions_success' => 'Izin halaman diperbarui',
    'pages_revision' => 'Revisi',
    'pages_revisions' => 'Revisi Halaman',
    'pages_revisions_named' => 'Revisi Halaman untuk :pageName',
    'pages_revision_named' => 'Revisi Halaman untuk :pageName',
    'pages_revision_restored_from' => 'Dipulihkan dari #:id; :summary',
    'pages_revisions_created_by' => 'Dibuat Oleh',
    'pages_revisions_date' => 'Tanggal Revisi',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revisi #:id',
    'pages_revisions_numbered_changes' => 'Revisi #:id Berubah',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Changelog',
    'pages_revisions_changes' => 'Perubahan',
    'pages_revisions_current' => 'Versi sekarang',
    'pages_revisions_preview' => 'Pratinjau',
    'pages_revisions_restore' => 'Mengembalikan',
    'pages_revisions_none' => 'Halaman ini tidak memiliki revisi',
    'pages_copy_link' => 'Salin tautan',
    'pages_edit_content_link' => 'Sunting Konten',
    'pages_permissions_active' => 'Izin Halaman Aktif',
    'pages_initial_revision' => 'Penerbitan awal',
    'pages_initial_name' => 'Halaman Baru',
    'pages_editing_draft_notification' => 'Anda sedang menyunting konsep yang terakhir disimpan :timeDiff.',
    'pages_draft_edited_notification' => 'Halaman ini telah diperbarui sejak saat itu. Anda disarankan untuk membuang draf ini.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count pengguna sudah mulai mengedit halaman ini',
        'start_b' => ':userName telah memulai menyunting halaman ini',
        'time_a' => 'semenjak halaman terakhir diperbarui',
        'time_b' => 'di akhir :minCount menit',
        'message' => ':start :time. Berhati-hatilah untuk tidak menimpa pembaruan satu sama lain!',
    ],
    'pages_draft_discarded' => 'Konsep dibuang, Penyunting telah diperbarui dengan konten halaman saat ini',
    'pages_specific' => 'Halaman Tertentu',
    'pages_is_template' => 'Template Halaman',

    // Editor Sidebar
    'page_tags' => 'Halaman Tag',
    'chapter_tags' => 'Bab Tag',
    'book_tags' => 'Tag Buku',
    'shelf_tags' => 'Tag Rak',
    'tag' => 'Tag',
    'tags' =>  'Semua Tag',
    'tag_name' =>  'Nama Tag',
    'tag_value' => 'Nilai Tag (opsional)',
    'tags_explain' => "Tambahkan beberapa tag untuk mengkategorikan konten Anda dengan lebih baik.\n Anda dapat menetapkan nilai ke tag untuk pengaturan yang lebih mendalam.",
    'tags_add' => 'Tambahkan tag lain',
    'tags_remove' => 'Hapus tag ini',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'All values',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Lampiran',
    'attachments_explain' => 'Unggah beberapa berkas atau lampirkan beberapa tautan untuk ditampilkan di laman Anda. Ini terlihat di sidebar halaman.',
    'attachments_explain_instant_save' => 'Perubahan di sini disimpan secara instan.',
    'attachments_items' => 'Item Terlampir',
    'attachments_upload' => 'Unggah Berkas',
    'attachments_link' => 'Lampirkan Tautan',
    'attachments_set_link' => 'Setel Tautan',
    'attachments_delete' => 'Anda yakin ingin menghapus lampiran ini?',
    'attachments_dropzone' => 'Jatuhkan file atau klik di sini untuk melampirkan file',
    'attachments_no_files' => 'Tidak ada berkas yang telah diunggah',
    'attachments_explain_link' => 'Anda dapat melampirkan sebuah tautan jika Anda memilih untuk tidak mengunggah berkas. Ini bisa berupa sebuah tautan ke halaman lain atau tautan ke sebuah berkas di cloud.',
    'attachments_link_name' => 'Nama Tautan',
    'attachment_link' => 'Lampiran Tautan',
    'attachments_link_url' => 'Tautan ke file',
    'attachments_link_url_hint' => 'Alamat url situs atau berkas',
    'attach' => 'Melampirkan',
    'attachments_insert_link' => 'Tambahkan Tautan Lampiran ke Halaman',
    'attachments_edit_file' => 'Edit File',
    'attachments_edit_file_name' => 'Nama file',
    'attachments_edit_drop_upload' => 'Jatuhkan berkas atau klik di sini untuk mengunggah dan menimpa',
    'attachments_order_updated' => 'Urutan lampiran diperbarui',
    'attachments_updated_success' => 'Detail lampiran diperbarui',
    'attachments_deleted' => 'Lampiran dihapus',
    'attachments_file_uploaded' => 'Berkas berhasil diunggah',
    'attachments_file_updated' => 'File berhasil diperbarui',
    'attachments_link_attached' => 'Tautan berhasil dilampirkan ke halaman',
    'templates' => 'Template',
    'templates_set_as_template' => 'Halaman adalah template',
    'templates_explain_set_as_template' => 'Anda dapat mengatur halaman ini sebagai template sehingga isinya dapat digunakan saat membuat halaman lain. Pengguna lain akan dapat menggunakan template ini jika mereka memiliki izin melihat halaman ini.',
    'templates_replace_content' => 'Ganti Halaman Konten',
    'templates_append_content' => 'Tambahkan ke halaman konten',
    'templates_prepend_content' => 'Tambahkan ke halaman konten',

    // Profile View
    'profile_user_for_x' => 'Pengguna untuk :time',
    'profile_created_content' => 'Konten yang Dibuat',
    'profile_not_created_pages' => ':userName belum membuat halaman apa pun',
    'profile_not_created_chapters' => ':userName belum membuat bab apa pun',
    'profile_not_created_books' => ':userName belum membuat buku apa pun',
    'profile_not_created_shelves' => ':userName belum membuat rak apa pun',

    // Comments
    'comment' => 'Komentar',
    'comments' => 'Komentar',
    'comment_add' => 'Tambah Komentar',
    'comment_placeholder' => 'Tinggalkan komentar disini',
    'comment_count' => '{0} Tidak ada komentar |{1} 1 Komentar |[2,*] :count Komentar',
    'comment_save' => 'Simpan Komentar',
    'comment_saving' => 'Menyimpan Komentar...',
    'comment_deleting' => 'Menghapus Komentar...',
    'comment_new' => 'Komentar Baru',
    'comment_created' => 'dikomentari oleh :createDiff',
    'comment_updated' => 'Diperbarui :updateDiff oleh :username',
    'comment_deleted_success' => 'Komentar telah dihapus',
    'comment_created_success' => 'Komentar telah di tambahkan',
    'comment_updated_success' => 'Komentar Telah diperbaharui',
    'comment_delete_confirm' => 'Anda yakin ingin menghapus komentar ini?',
    'comment_in_reply_to' => 'Sebagai balasan untuk :commentId',

    // Revision
    'revision_delete_confirm' => 'Anda yakin ingin menghapus revisi ini?',
    'revision_restore_confirm' => 'Apakah Anda yakin ingin memulihkan revisi ini? Konten halaman saat ini akan diganti.',
    'revision_delete_success' => 'Revisi dihapus',
    'revision_cannot_delete_latest' => 'Tidak dapat menghapus revisi terakhir.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',
];
