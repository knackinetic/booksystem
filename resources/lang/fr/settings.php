<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Préférences',
    'settings_save' => 'Enregistrer les préférences',
    'settings_save_success' => 'Préférences enregistrées',

    // App Settings
    'app_customization' => 'Personnalisation',
    'app_features_security' => 'Fonctionnalités et sécurité',
    'app_name' => 'Nom de l\'application',
    'app_name_desc' => 'Ce nom est affiché dans l\'en-tête et les e-mails.',
    'app_name_header' => 'Afficher le nom dans l\'en-tête ?',
    'app_public_access' => 'Accès public',
    'app_public_access_desc' => 'L\'activation de cette option permettra aux visiteurs, qui ne sont pas connectés, d\'accéder au contenu de votre instance BookStack.',
    'app_public_access_desc_guest' => 'L\'accès pour les visiteurs publics peut être contrôlé par l\'utilisateur "Guest".',
    'app_public_access_toggle' => 'Autoriser l\'accès public',
    'app_public_viewing' => 'Accepter le visionnage public des pages ?',
    'app_secure_images' => 'Activer l\'ajout d\'image sécurisé ?',
    'app_secure_images_toggle' => 'Activer l\'ajout d\'image sécurisé',
    'app_secure_images_desc' => 'Pour des questions de performances, toutes les images sont publiques. Cette option ajoute une chaîne aléatoire difficile à deviner dans les URLs des images.',
    'app_editor' => 'Editeur des pages',
    'app_editor_desc' => 'Sélectionnez l\'éditeur qui sera utilisé pour modifier les pages.',
    'app_custom_html' => 'HTML personnalisé dans l\'en-tête',
    'app_custom_html_desc' => 'Le contenu inséré ici sera ajouté en bas de la balise <head> de toutes les pages. Vous pouvez l\'utiliser pour ajouter du CSS personnalisé ou un tracker analytique.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Logo de l\'Application',
    'app_logo_desc' => 'Cette image doit faire 43px de hauteur. <br>Les images plus larges seront réduites.',
    'app_primary_color' => 'Couleur principale de l\'application',
    'app_primary_color_desc' => 'Cela devrait être une valeur hexadécimale. <br>Laisser vide pour rétablir la couleur par défaut.',
    'app_homepage' => 'Page d\'accueil de l\'application',
    'app_homepage_desc' => 'Choisissez une page à afficher sur la page d\'accueil au lieu de la vue par défaut. Les permissions sont ignorées pour les pages sélectionnées.',
    'app_homepage_select' => 'Choisissez une page',
    'app_disable_comments' => 'Désactiver les commentaires',
    'app_disable_comments_toggle' => 'Désactiver les commentaires',
    'app_disable_comments_desc' => 'Désactive les commentaires sur toutes les pages de l\'application. Les commentaires existants ne sont pas affichés.',

    // Color settings
    'content_colors' => 'Couleur du contenu',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Couleur du livre',
    'chapter_color' => 'Couleur du chapitre',
    'page_color' => 'Couleur de la page',
    'page_draft_color' => 'Couleur du brouillon',

    // Registration Settings
    'reg_settings' => 'Préférence pour l\'inscription',
    'reg_enable' => 'Activer l\'inscription',
    'reg_enable_toggle' => 'Activer l\'inscription',
    'reg_enable_desc' => 'Lorsque l\'inscription est activée, l\'utilisateur pourra s\'enregistrer en tant qu\'utilisateur de l\'application. Lors de l\'inscription, ils se voient attribuer un rôle par défaut.',
    'reg_default_role' => 'Rôle par défaut lors de l\'inscription',
    'reg_enable_ldap_warning' => 'The option above is not used while LDAP authentication is active. User accounts for non-existing members will be auto-created if authentication, against the LDAP system in use, is successful.',
    'reg_email_confirmation' => 'Confirmation de l\'e-mail',
    'reg_email_confirmation_toggle' => 'Obliger la confirmation par e-mail ?',
    'reg_confirm_email_desc' => 'Si la restriction de domaine est activée, la confirmation sera automatiquement obligatoire et cette valeur sera ignorée.',
    'reg_confirm_restrict_domain' => 'Restreindre l\'inscription à un domaine',
    'reg_confirm_restrict_domain_desc' => 'Entrez une liste de domaines acceptés lors de l\'inscription, séparés par une virgule. Les utilisateurs recevront un e-mail de confirmation à cette adresse. <br> Les utilisateurs pourront changer leur adresse après inscription s\'ils le souhaitent.',
    'reg_confirm_restrict_domain_placeholder' => 'Aucune restriction en place',

    // Maintenance settings
    'maint' => 'Maintenance',
    'maint_image_cleanup' => 'Nettoyer les images',
    'maint_image_cleanup_desc' => "Scan le contenu des pages et des révisions pour vérifier les images et les dessins en cours d'utilisation et lesquels sont redondant. Veuillez à faire une sauvegarde de la base de données et des images avant de lancer ceci.",
    'maint_image_cleanup_ignore_revisions' => 'Ignorer les images dans les révisions',
    'maint_image_cleanup_run' => 'Lancer le nettoyage',
    'maint_image_cleanup_warning' => ':count images potentiellement inutilisées trouvées. Etes-vous sûr de vouloir supprimer ces images ?',
    'maint_image_cleanup_success' => ':count images potentiellement inutilisées trouvées et supprimées !',
    'maint_image_cleanup_nothing_found' => 'Aucune image inutilisée trouvée, rien à supprimer !',
    'maint_send_test_email' => 'Envoyer un email de test',
    'maint_send_test_email_desc' => 'Ceci envoie un e-mail de test à votre adresse e-mail spécifiée dans votre profil.',
    'maint_send_test_email_run' => 'Envoyer un email de test',
    'maint_send_test_email_success' => 'Email envoyé à :address',
    'maint_send_test_email_mail_subject' => 'Email de test',
    'maint_send_test_email_mail_greeting' => 'La livraison d\'email semble fonctionner !',
    'maint_send_test_email_mail_text' => 'Félicitations ! Lorsque vous avez reçu cette notification par courriel, vos paramètres d\'email semblent être configurés correctement.',

    // Role Settings
    'roles' => 'Rôles',
    'role_user_roles' => 'Rôles des utilisateurs',
    'role_create' => 'Créer un nouveau rôle',
    'role_create_success' => 'Rôle créé avec succès',
    'role_delete' => 'Supprimer le rôle',
    'role_delete_confirm' => 'Ceci va supprimer le rôle \':roleName\'.',
    'role_delete_users_assigned' => 'Ce rôle a :userCount utilisateurs assignés. Vous pouvez choisir un rôle de remplacement pour ces utilisateurs.',
    'role_delete_no_migration' => "Ne pas assigner de nouveau rôle",
    'role_delete_sure' => 'Êtes-vous sûr de vouloir supprimer ce rôle ?',
    'role_delete_success' => 'Le rôle a été supprimé avec succès',
    'role_edit' => 'Modifier le rôle',
    'role_details' => 'Détails du rôle',
    'role_name' => 'Nom du rôle',
    'role_desc' => 'Courte description du rôle',
    'role_external_auth_id' => 'Identifiants d\'authentification externes',
    'role_system' => 'Permissions système',
    'role_manage_users' => 'Gérer les utilisateurs',
    'role_manage_roles' => 'Gérer les rôles et permissions',
    'role_manage_entity_permissions' => 'Gérer les permissions sur les livres, chapitres et pages',
    'role_manage_own_entity_permissions' => 'Gérer les permissions de ses propres livres, chapitres et pages',
    'role_manage_page_templates' => 'Gérer les modèles de page',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Gérer les préférences de l\'application',
    'role_asset' => 'Permissions des ressources',
    'role_asset_desc' => 'Ces permissions contrôlent l\'accès par défaut des ressources dans le système. Les permissions dans les livres, les chapitres et les pages ignoreront ces permissions',
    'role_asset_admins' => 'Les administrateurs ont automatiquement accès à tous les contenus mais les options suivantes peuvent afficher ou masquer certaines options de l\'interface.',
    'role_all' => 'Tous',
    'role_own' => 'Propres',
    'role_controlled_by_asset' => 'Contrôlé par les ressources les ayant envoyés',
    'role_save' => 'Enregistrer le rôle',
    'role_update_success' => 'Rôle mis à jour avec succès',
    'role_users' => 'Utilisateurs ayant ce rôle',
    'role_users_none' => 'Aucun utilisateur avec ce rôle actuellement',

    // Users
    'users' => 'Utilisateurs',
    'user_profile' => 'Profil d\'utilisateur',
    'users_add_new' => 'Ajouter un nouvel utilisateur',
    'users_search' => 'Chercher les utilisateurs',
    'users_details' => 'Informations de l\'utilisateur',
    'users_details_desc' => 'Définissez un nom et une adresse e-mail pour cet utilisateur. L\'adresse e-mail sera utilisée pour se connecter à l\'application.',
    'users_details_desc_no_email' => 'Définissez un nom d\'affichage pour cet utilisateur afin que les autres puissent le reconnaître.',
    'users_role' => 'Rôles de l\'utilisateur',
    'users_role_desc' => 'Sélectionnez les rôles auxquels cet utilisateur sera affecté. Si un utilisateur est affecté à plusieurs rôles, les permissions de ces rôles s\'empileront et ils recevront toutes les capacités des rôles affectés.',
    'users_password' => 'Mot de passe de l\'utilisateur',
    'users_password_desc' => 'Définissez un mot de passe utilisé pour vous connecter à l\'application. Il doit comporter au moins 5 caractères.',
    'users_send_invite_text' => 'Vous pouvez choisir d\'envoyer à cet utilisateur un email d\'invitation qui lui permet de définir son propre mot de passe, sinon vous pouvez définir son mot de passe vous-même.',
    'users_send_invite_option' => 'Envoyer l\'e-mail d\'invitation',
    'users_external_auth_id' => 'Identifiant d\'authentification externe',
    'users_external_auth_id_desc' => 'Il s\'agit de l\'identifiant utilisé pour appairer cet utilisateur lors de la communication avec votre système LDAP.',
    'users_password_warning' => 'Remplissez ce formulaire uniquement si vous souhaitez changer de mot de passe:',
    'users_system_public' => 'Cet utilisateur représente les invités visitant votre instance. Il est assigné automatiquement aux invités.',
    'users_delete' => 'Supprimer un utilisateur',
    'users_delete_named' => 'Supprimer l\'utilisateur :userName',
    'users_delete_warning' => 'Ceci va supprimer \':userName\' du système.',
    'users_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer cet utilisateur ?',
    'users_delete_success' => 'Utilisateurs supprimés avec succès',
    'users_edit' => 'Modifier l\'utilisateur',
    'users_edit_profile' => 'Modifier le profil',
    'users_edit_success' => 'Utilisateur mis à jour avec succès',
    'users_avatar' => 'Avatar de l\'utilisateur',
    'users_avatar_desc' => 'Cette image doit être un carré d\'environ 256 px.',
    'users_preferred_language' => 'Langue préférée',
    'users_preferred_language_desc' => 'Cette option changera la langue utilisée pour l\'interface utilisateur de l\'application. Ceci n\'affectera aucun contenu créé par l\'utilisateur.',
    'users_social_accounts' => 'Comptes sociaux',
    'users_social_accounts_info' => 'Vous pouvez connecter des réseaux sociaux à votre compte pour vous connecter plus rapidement. Déconnecter un compte n\'enlèvera pas les accès autorisés précédemment sur votre compte de réseau social.',
    'users_social_connect' => 'Connecter le compte',
    'users_social_disconnect' => 'Déconnecter le compte',
    'users_social_connected' => 'Votre compte :socialAccount a été ajouté avec succès.',
    'users_social_disconnected' => 'Votre compte :socialAccount a été déconnecté avec succès',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
