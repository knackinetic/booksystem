<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nustatymai',
    'settings_save' => 'Išsaugoti nustatymus',
    'settings_save_success' => 'Nustatymai išsaugoti',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => 'Tinkinimas',
    'app_features_security' => 'Funkcijos ir sauga',
    'app_name' => 'Programos pavadinimas',
    'app_name_desc' => 'Šis pavadinimas yra rodomas antraštėje ir bet kuriuose sistemos siunčiamuose elektroniniuose laiškuose.',
    'app_name_header' => 'Rodyti pavadinimą antraštėje',
    'app_public_access' => 'Vieša prieiga',
    'app_public_access_desc' => 'Įjungus šią parinktį lankytojai, kurie nėra prisijungę, galės pasiekti BookStack egzemplioriaus turinį.',
    'app_public_access_desc_guest' => 'Prieiga viešiems lankytojams gali būti kontroliuojama per "Svečio" naudotoją.',
    'app_public_access_toggle' => 'Leisti viešą prieigą',
    'app_public_viewing' => 'Leisti viešą žiūrėjimą?',
    'app_secure_images' => 'Didesnio saugumo vaizdų įkėlimai',
    'app_secure_images_toggle' => 'Įgalinti didesnio saugumo vaizdų įkėlimus',
    'app_secure_images_desc' => 'Dėl veiklos priežasčių, visi vaizdai yra vieši. Šis pasirinkimas prideda atsitiktinę, sunkiai atspėjamą eilutę prieš vaizdo URL. Įsitikinkite, kad katalogų rodyklės neįgalintos, kad prieiga būtų lengvesnė.',
    'app_editor' => 'Puslapio redaktorius',
    'app_editor_desc' => 'Pasirinkite, kuris redaktorius bus naudojamas visų vartotojų redaguoti puslapiams.',
    'app_custom_html' => 'Pasirinktinis HTL antraštės turinys',
    'app_custom_html_desc' => 'Bet koks čia pridedamas turinys bus prisegamas apačioje <antraštės> kiekvieno puslapio skyriuje. Tai yra patogu svarbesniems stiliams arba pridedant analizės kodą.',
    'app_custom_html_disabled_notice' => 'Pasirinktinis HTML antraštės turinys yra išjungtas šiame nustatymų puslapyje užtikrinti, kad bet kokie negeri pokyčiai galėtų būti anuliuojami.',
    'app_logo' => 'Programos logotipas',
    'app_logo_desc' => 'Šis vaizdas turėtų būti 43px aukščio. <br> Dideli vaizdai bus sumažinti.',
    'app_primary_color' => 'Programos pagrindinė spalva',
    'app_primary_color_desc' => 'Nustato pagrindinę spalvą programai, įskaitant reklamjuostę, mygtukus ir nuorodas.',
    'app_homepage' => 'Programos pagrindinis puslapis',
    'app_homepage_desc' => 'Pasirinkite vaizdą rodyti pagrindiniame paslapyje vietoj numatyto vaizdo. Puslapio leidimai yra ignoruojami pasirinktiems puslapiams.',
    'app_homepage_select' => 'Pasirinkti puslapį',
    'app_footer_links' => 'Poraštės nuorodos',
    'app_footer_links_desc' => 'Pridėkite nuorodas, kurias norite pridėti svetainės poraštėje. Jos bus rodomos daugelio puslapių apačioje, įskaitant ir tuos, kurie nereikalauja prisijungimo. Jūs galite naudoti etiktę "trans::<key>", kad naudotis sistemos apibrėžtais vertimais. Pavyzdžiui: naudojimasis "trans::common.privacy_policy" bus pateiktas išverstu tekstu "Privatumo Politika" ir ""trans::common.terms_of_service" bus pateikta išverstu tekstu "Paslaugų Teikimo Sąlygos".',
    'app_footer_links_label' => 'Etiketės nuoroda',
    'app_footer_links_url' => 'Nuoroda URL',
    'app_footer_links_add' => 'Pridėti poraštes nuorodą',
    'app_disable_comments' => 'Išjungti komentarus',
    'app_disable_comments_toggle' => 'Išjungti komentarus',
    'app_disable_comments_desc' => 'Išjungti komentarus visuose programos puslapiuose. <br> Esantys komentarai nerodomi.',

    // Color settings
    'content_colors' => 'Turinio spalvos',
    'content_colors_desc' => 'Nustato spalvas visiems elementams puslapio organizacijos herarchijoje. Rekomenduojama pasirinkti spalvas su panačiu šviesumu kaip numatytos spalvos, kad būtų lengviau skaityti.',
    'bookshelf_color' => 'Lentynos spalva',
    'book_color' => 'Knygos spalva',
    'chapter_color' => 'Skyriaus spalva',
    'page_color' => 'Puslapio spalva',
    'page_draft_color' => 'Puslapio juodraščio spalva',

    // Registration Settings
    'reg_settings' => 'Registracija',
    'reg_enable' => 'Įgalinti registraciją',
    'reg_enable_toggle' => 'Įgalinti registraciją',
    'reg_enable_desc' => 'Kai registracija yra įgalinta, naudotojai gali prisiregistruoti kaip programos naudotojai. Registruojantis jiems suteikiamas vienintelis, nematytasis naudotojo vaidmuo.',
    'reg_default_role' => 'Numatytasis naudotojo vaidmuo po registracijos',
    'reg_enable_external_warning' => 'Ankstesnė parinktis nepaisoma, kai išorinis LDAP arba SAML autentifikavimas yra aktyvus. Vartotojo paskyra neegzistuojantiems nariams bus automatiškai sukurta, jei autentifikavimas naudojant naudojamą išorinę sistemą bus sėkmingas.',
    'reg_email_confirmation' => 'Elektroninio pašto patvirtinimas',
    'reg_email_confirmation_toggle' => 'Reikalauja elektroninio pašto patvirtinimo',
    'reg_confirm_email_desc' => 'Jei naudojamas domeno apribojimas, tada elektroninio pašto patvirtinimas bus reikalaujamas ir ši parinktis bus ignoruojama.',
    'reg_confirm_restrict_domain' => 'Domeno apribojimas',
    'reg_confirm_restrict_domain_desc' => 'Įveskite kableliais atskirtą elektroninio pašto domenų, kurių registravimą norite apriboti, sąrašą. Vartotojai išsiųs elektorinį laišką, kad patvirtintumėte jų adresą prieš leidžiant naudotis programa. <br> Prisiminkite, kad vartotojai galės pakeisti savo elektroninius paštus po sėkmingos registracijos.',
    'reg_confirm_restrict_domain_placeholder' => 'Nėra jokių apribojimų',

    // Maintenance settings
    'maint' => 'Priežiūra',
    'maint_image_cleanup' => 'Išvalykite vaizdus',
    'maint_image_cleanup_desc' => 'Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.',
    'maint_delete_images_only_in_revisions' => 'Taip pat ištrinkite vaizdus, kurie yra tik senuose puslapių pataisymuose',
    'maint_image_cleanup_run' => 'Paleisti valymą',
    'maint_image_cleanup_warning' => ':count potencialiai nepanaudoti vaizdai rasti. Ar esate tikri, kad norite ištrinti šiuos vaizdus?',
    'maint_image_cleanup_success' => ':count potencialiai nepanaudoti vaizdai rasti ir ištrinti!',
    'maint_image_cleanup_nothing_found' => 'Nerasta nepanaudotų vaizdų, niekas neištrinta!',
    'maint_send_test_email' => 'Siųsti bandomąjį elektroninį laišką',
    'maint_send_test_email_desc' => 'ai siunčia bandomąjį elektroninį laišką elektroninio pašto adresu, nurodytu jūsų profilyje.',
    'maint_send_test_email_run' => 'Siųsti bandomąjį elektroninį laišką',
    'maint_send_test_email_success' => 'Elektroninis laiškas išsiųstas :address',
    'maint_send_test_email_mail_subject' => 'Bandomasis elektroninis laiškas',
    'maint_send_test_email_mail_greeting' => 'Elektroninio laiško pristatymas veikia!',
    'maint_send_test_email_mail_text' => 'Sveikiname! Kadangi gavote šį elektroninio pašto pranešimą, jūsų elektroninio pašto nustatymai buvo sukonfigūruoti teisingai.',
    'maint_recycle_bin_desc' => 'Ištrintos lentynos, knygos, skyriai ir puslapiai yra perkeliami į šiukšliadėžę tam, kad jie galėtų būti atkurti arba ištrinti visam laikui. Senesni elementai, esantys šiukšliadėžėje, gali būti automatiškai panaikinti po tam tikro laiko priklausomai nuo sistemos konfigūracijos.',
    'maint_recycle_bin_open' => 'Atidaryti šiukšliadėžę',

    // Recycle Bin
    'recycle_bin' => 'Šiukšliadėžė',
    'recycle_bin_desc' => 'Čia gali atkurti elementus, kurie buvo ištrinti arba pasirinkti pašalinti juos iš sistemos visam laikui. Šis sąrašas yra nefiltruotas kaip kitie panašus veiklos sąrašai sistemoje, kuriems yra taikomi leidimo filtrai.',
    'recycle_bin_deleted_item' => 'Ištrintas elementas',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Ištrynė',
    'recycle_bin_deleted_at' => 'Panaikinimo laikas',
    'recycle_bin_permanently_delete' => 'Ištrinti visam laikui',
    'recycle_bin_restore' => 'Atkurti',
    'recycle_bin_contents_empty' => 'Šiukšliadėžė šiuo metu yra tuščia',
    'recycle_bin_empty' => 'Ištuštinti šiukšliadėžę',
    'recycle_bin_empty_confirm' => 'Tai visam laikui sunaikins visus elementus, esančius šiukšliadėžėje, įskaitant kiekvieno elemento turinį. Ar esate tikri, jog norite ištuštinti šiukšliadėžę?',
    'recycle_bin_destroy_confirm' => 'Šis veiksmas visam laikui ištrins šį elementą iš sistemos kartu su bet kuriais elementais įvardintais žemiau ir jūs nebegalėsite atkurti jo bei jo turinio. Ar esate tikri, jog norite visam laikui ištrinti šį elementą?',
    'recycle_bin_destroy_list' => 'Elementai panaikinimui',
    'recycle_bin_restore_list' => 'Elementai atkūrimui',
    'recycle_bin_restore_confirm' => 'Šis veiksmas atkurs ištrintą elementą ir perkels jį atgal į jo originalią vietą. Jei originali vieta buvo ištrinta ir šiuo metu yra šiukšliadėžėje, ji taip pat turės būti atkurta.',
    'recycle_bin_restore_deleted_parent' => 'Pagrindinis elementas buvo ištrintas. Šie elementai liks ištrinti iki tol, kol bus atkurtas pagrindinis elementas.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Ištrinti :count visus elementus, esančius šiukšliadėžėje.',
    'recycle_bin_restore_notification' => 'Atkurti :count visus elementus, esančius šiukšliadėžėje.',

    // Audit Log
    'audit' => 'Audito seka',
    'audit_desc' => 'Ši audito seka rodo sąrašą veiklų, rastų sistemoje. Šis sąrašas yra nefiltruotas kaip kitie panašus veiklos sąrašai sistemoje, kuriems yra taikomi leidimo filtrai.',
    'audit_event_filter' => 'Įvykio filtras',
    'audit_event_filter_no_filter' => 'Be filtrų',
    'audit_deleted_item' => 'Ištrintas elementas',
    'audit_deleted_item_name' => 'Vardas: :name',
    'audit_table_user' => 'Naudotojas',
    'audit_table_event' => 'Įvykis',
    'audit_table_related' => 'Susijęs elementas arba detalė',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Veiklos data',
    'audit_date_from' => 'Datos seka nuo',
    'audit_date_to' => 'Datos seka iki',

    // Role Settings
    'roles' => 'Vaidmenys',
    'role_user_roles' => 'Naudotojo vaidmenys',
    'role_create' => 'Sukurti naują vaidmenį',
    'role_create_success' => 'Vaidmuo sukurtas sėkmingai',
    'role_delete' => 'Ištrinti vaidmenį',
    'role_delete_confirm' => 'Tai ištrins vaidmenį vardu\':roleName\'.',
    'role_delete_users_assigned' => 'Šis vaidmuo turi :userCount naudotojus priskirtus prie jo. Jeigu norite naudotojus perkelti iš šio vaidmens, pasirinkite naują vaidmenį apačioje.',
    'role_delete_no_migration' => "Don't migrate users",
    'role_delete_sure' => 'Ar esate tikri, jog norite ištrinti šį vaidmenį?',
    'role_delete_success' => 'Vaidmuo ištrintas sėkmingai',
    'role_edit' => 'Redaguoti vaidmenį',
    'role_details' => 'Vaidmens detalės',
    'role_name' => 'Vaidmens pavadinimas',
    'role_desc' => 'Trumpas vaidmens aprašymas',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'Išorinio autentifikavimo ID',
    'role_system' => 'Sistemos leidimai',
    'role_manage_users' => 'Tvarkyti naudotojus',
    'role_manage_roles' => 'Tvarkyti vaidmenis ir vaidmenų leidimus',
    'role_manage_entity_permissions' => 'Tvarkyti visus knygų, skyrių ir puslapių leidimus',
    'role_manage_own_entity_permissions' => 'Tvarkyti savo knygos, skyriaus ir puslapių leidimus',
    'role_manage_page_templates' => 'Tvarkyti puslapių šablonus',
    'role_access_api' => 'Gauti prieigą prie sistemos API',
    'role_manage_settings' => 'Tvarkyti programos nustatymus',
    'role_export_content' => 'Export content',
    'role_asset' => 'Nuosavybės leidimai',
    'roles_system_warning' => 'Būkite sąmoningi, kad prieiga prie bet kurio iš trijų leidimų viršuje gali leisti naudotojui pakeisti jų pačių privilegijas arba kitų privilegijas sistemoje. Paskirkite vaidmenis su šiais leidimais tik patikimiems naudotojams.',
    'role_asset_desc' => 'Šie leidimai kontroliuoja numatytą prieigą į nuosavybę, esančią sistemoje. Knygų, skyrių ir puslapių leidimai nepaisys šių leidimų.',
    'role_asset_admins' => 'Administratoriams automatiškai yra suteikiama prieiga prie viso turinio, tačiau šie pasirinkimai gali rodyti arba slėpti vartotojo sąsajos parinktis.',
    'role_all' => 'Visi',
    'role_own' => 'Nuosavi',
    'role_controlled_by_asset' => 'Kontroliuojami nuosavybės, į kurią yra įkelti',
    'role_save' => 'Išsaugoti vaidmenį',
    'role_update_success' => 'Vaidmuo atnaujintas sėkmingai',
    'role_users' => 'Naudotojai šiame vaidmenyje',
    'role_users_none' => 'Šiuo metu prie šio vaidmens nėra priskirta naudotojų',

    // Users
    'users' => 'Naudotojai',
    'user_profile' => 'Naudotojo profilis',
    'users_add_new' => 'Pridėti naują naudotoją',
    'users_search' => 'Ieškoti naudotojų',
    'users_latest_activity' => 'Naujausia veikla',
    'users_details' => 'Naudotojo detalės',
    'users_details_desc' => 'Nustatykite rodomąjį vardą ir elektroninio pašto adresą šiam naudotojui. Šis elektroninio pašto adresas bus naudojamas prisijungimui prie aplikacijos.',
    'users_details_desc_no_email' => 'Nustatykite rodomąjį vardą šiam naudotojui, kad kiti galėtų jį atpažinti.',
    'users_role' => 'Naudotojo vaidmenys',
    'users_role_desc' => 'Pasirinkite, prie kokių vaidmenų bus priskirtas šis naudotojas. Jeigu naudotojas yra priskirtas prie kelių vaidmenų, leidimai iš tų vaidmenų susidės ir jie gaus visus priskirtų vaidmenų gebėjimus.',
    'users_password' => 'Naudotojo slaptažodis',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Jūs galite pasirinkti nusiųsti šiam naudotojui kvietimą elektroniniu paštu, kuris leistų jiems patiems susikurti slaptažodį. Priešingu atveju slaptažodį galite sukurti patys.',
    'users_send_invite_option' => 'Nusiųsti naudotojui kvietimą elektroniniu paštu',
    'users_external_auth_id' => 'Išorinio autentifikavimo ID',
    'users_external_auth_id_desc' => 'Tai yra ID, naudojamas norint suderinti šį naudotoją bendraujant su jūsų išorinio autentifikavimo sistema.',
    'users_password_warning' => 'Užpildykite laukelį apačioje tik tuo atveju, jeigu norite pakeisti savo slaptažodį.',
    'users_system_public' => 'Šis naudotojas atstovauja svečius, kurie aplanko jūsų egzempliorių. Jis negali būti naudojamas prisijungimui, tačiau yra priskiriamas automatiškai.',
    'users_delete' => 'Ištrinti naudotoją',
    'users_delete_named' => 'Ištrinti naudotoją :userName',
    'users_delete_warning' => 'Tai pilnai ištrins šį naudotoją vardu \':userName\' iš sistemos.',
    'users_delete_confirm' => 'Ar esate tikri, jog norite ištrinti šį naudotoją?',
    'users_migrate_ownership' => 'Perkelti nuosavybę',
    'users_migrate_ownership_desc' => 'Pasirinkite naudotoją, jeigu norite, kad kitas naudotojas taptų visų elementų, šiuo metu priklausančių šiam naudotojui, savininku.',
    'users_none_selected' => 'Naudotojas nepasirinktas',
    'users_edit' => 'Redaguoti naudotoją',
    'users_edit_profile' => 'Redaguoti profilį',
    'users_avatar' => 'Naudotojo pseudoportretas',
    'users_avatar_desc' => 'Pasirinkite nuotrauką, pavaizduojančią šį naudotoją. Nuotrauka turi būti maždaug 256px kvadratas.',
    'users_preferred_language' => 'Norima kalba',
    'users_preferred_language_desc' => 'Ši parinktis pakeis kalbą, naudojamą naudotojo sąsajoje aplikacijoje. Tai neturės įtakos jokiam vartotojo sukurtam turiniui.',
    'users_social_accounts' => 'Socialinės paskyros',
    'users_social_accounts_info' => 'Čia galite susieti savo kitas paskyras greitesniam ir lengvesniam prisijungimui. Atjungus paskyrą čia neatšaukiama anksčiau leista prieiga. Atšaukite prieigą iš profilio nustatymų prijungtoje socialinėje paskyroje.',
    'users_social_connect' => 'Susieti paskyrą',
    'users_social_disconnect' => 'Atskirti paskyrą',
    'users_social_connected' => ':socialAccount paskyra buvo sėkmingai susieta su jūsų profiliu.',
    'users_social_disconnected' => ':socialAccount paskyra buvo sėkmingai atskirta nuo jūsu profilio.',
    'users_api_tokens' => 'API sąsajos prieigos raktai',
    'users_api_tokens_none' => 'Jokie API sąsajos prieigos raktai nebuvo sukurti šiam naudotojui',
    'users_api_tokens_create' => 'Sukurti prieigos raktą',
    'users_api_tokens_expires' => 'Baigia galioti',
    'users_api_tokens_docs' => 'API dokumentacija',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Sukurti API sąsajos prieigos raktą',
    'user_api_token_name' => 'Pavadinimas',
    'user_api_token_name_desc' => 'Suteikite savo prieigos raktui perskaitomą pavadinimą kaip priminimą ateičiai apie jo numatytą tikslą.',
    'user_api_token_expiry' => 'Galiojimo laikas',
    'user_api_token_expiry_desc' => 'Nustatykite datą kada šis prieigos raktas baigs galioti. Po šios datos, prašymai, atlikti naudojant šį prieigos raktą daugiau nebeveiks. Jeigu šį laukelį paliksite tuščią, galiojimo laikas bus nustatytas 100 metų į ateitį.',
    'user_api_token_create_secret_message' => 'Iš karto sukūrus šį prieigos raktą, bus sukurtas ir rodomas "Priegos rakto ID" ir "Prieigos rakto slėpinys". Prieigos rakto slėpinys bus rodomas tik vieną kartą, todėl būtinai nukopijuokite jį kur nors saugioje vietoje.',
    'user_api_token_create_success' => 'API sąsajos prieigos raktas sėkmingai sukurtas',
    'user_api_token_update_success' => 'API sąsajos prieigos raktas sėkmingai atnaujintas',
    'user_api_token' => 'API sąsajos prieigos raktas',
    'user_api_token_id' => 'Prieigos rakto ID',
    'user_api_token_id_desc' => 'Tai neredaguojamas sistemos sugeneruotas identifikatorius šiam prieigos raktui, kurį reikės pateikti API užklausose.',
    'user_api_token_secret' => 'Priegos rakto slėpinys',
    'user_api_token_secret_desc' => 'Tai yra sistemos sukurtas šio priegos rakto slėpinys, kurią reikės pateikti API užklausose. Tai bus rodoma tik šį kartą, todėl nukopijuokite šią vertę į saugią vietą.',
    'user_api_token_created' => 'Prieigos raktas sukurtas :timeAgo',
    'user_api_token_updated' => 'Prieigos raktas atnaujintas :timeAgo',
    'user_api_token_delete' => 'Ištrinti prieigos raktą',
    'user_api_token_delete_warning' => 'Tai pilnai ištrins šį API sąsajos prieigos raktą pavadinimu \':tokenName\' iš sistemos.',
    'user_api_token_delete_confirm' => 'Ar esate tikri, jog norite ištrinti šį API sąsajos prieigos raktą?',
    'user_api_token_delete_success' => 'API sąsajos prieigos raktas sėkmingai ištrintas',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
