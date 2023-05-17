<?php

/**
 * Global app configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

use Illuminate\Support\Facades\Facade;

return [

    // The environment to run BookStack in.
    // Options: production, development, demo, testing
    'env' => env('APP_ENV', 'production'),

    // Enter the application in debug mode.
    // Shows much more verbose error messages. Has potential to show
    // private configuration variables so should remain disabled in public.
    'debug' => env('APP_DEBUG', false),

    // The number of revisions to keep in the database.
    // Once this limit is reached older revisions will be deleted.
    // If set to false then a limit will not be enforced.
    'revision_limit' => env('REVISION_LIMIT', 100),

    // The number of days that content will remain in the recycle bin before
    // being considered for auto-removal. It is not a guarantee that content will
    // be removed after this time.
    // Set to 0 for no recycle bin functionality.
    // Set to -1 for unlimited recycle bin lifetime.
    'recycle_bin_lifetime' => env('RECYCLE_BIN_LIFETIME', 30),

    // The limit for all uploaded files, including images and attachments in MB.
    'upload_limit' => env('FILE_UPLOAD_SIZE_LIMIT', 50),

    // Allow <script> tags to entered within page content.
    // <script> tags are escaped by default.
    // Even when overridden the WYSIWYG editor may still escape script content.
    'allow_content_scripts' => env('ALLOW_CONTENT_SCRIPTS', false),

    // Allow server-side fetches to be performed to potentially unknown
    // and user-provided locations. Primarily used in exports when loading
    // in externally referenced assets.
    'allow_untrusted_server_fetching' => env('ALLOW_UNTRUSTED_SERVER_FETCHING', false),

    // Override the default behaviour for allowing crawlers to crawl the instance.
    // May be ignored if view has be overridden or modified.
    // Defaults to null since, if not set, 'app-public' status used instead.
    'allow_robots' => env('ALLOW_ROBOTS', null),

    // Application Base URL, Used by laravel in development commands
    // and used by BookStack in URL generation.
    'url' => env('APP_URL', '') === 'http://bookstack.dev' ? '' : env('APP_URL', ''),

    // A list of hosts that BookStack can be iframed within.
    // Space separated if multiple. BookStack host domain is auto-inferred.
    'iframe_hosts' => env('ALLOWED_IFRAME_HOSTS', null),

    // A list of sources/hostnames that can be loaded within iframes within BookStack.
    // Space separated if multiple. BookStack host domain is auto-inferred.
    // Can be set to a lone "*" to allow all sources for iframe content (Not advised).
    // Defaults to a set of common services.
    // Current host and source for the "DRAWIO" setting will be auto-appended to the sources configured.
    'iframe_sources' => env('ALLOWED_IFRAME_SOURCES', 'https://*.draw.io https://*.youtube.com https://*.youtube-nocookie.com https://*.vimeo.com'),

    // Alter the precision of IP addresses stored by BookStack.
    // Integer value between 0 (IP hidden) to 4 (Full IP usage)
    'ip_address_precision' => env('IP_ADDRESS_PRECISION', 4),

    // Application timezone for back-end date functions.
    'timezone' => env('APP_TIMEZONE', 'UTC'),

    // Default locale to use
    'locale' => env('APP_LANG', 'en'),

    // Locales available
    'locales' => ['en', 'ar', 'bg', 'bs', 'ca', 'cs', 'cy', 'da', 'de', 'de_informal', 'el', 'es', 'es_AR', 'et', 'eu', 'fa', 'fr', 'he', 'hr', 'hu', 'id', 'it', 'ja', 'ka', 'ko', 'lt', 'lv', 'nl', 'nb', 'pt', 'pt_BR', 'sk', 'sl', 'sv', 'pl',  'ro', 'ru', 'tr', 'uk', 'uz', 'vi', 'zh_CN', 'zh_TW'],

    //  Application Fallback Locale
    'fallback_locale' => 'en',

    // Faker Locale
    'faker_locale' => 'en_GB',

    // Enable right-to-left text control.
    'rtl' => false,

    // Auto-detect the locale for public users
    // For public users their locale can be guessed by headers sent by their
    // browser. This is usually set by users in their browser settings.
    // If not found the default app locale will be used.
    'auto_detect_locale' => env('APP_AUTO_LANG_PUBLIC', true),

    // Encryption key
    'key' => env('APP_KEY', 'AbAZchsay4uBTU33RubBzLKw203yqSqr'),

    // Encryption cipher
    'cipher' => 'AES-256-CBC',

    // Maintenance Mode Driver
    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    // Application Service Providers
    'providers' => [

        // Laravel Framework Service Providers...
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        // Third party service providers
        Barryvdh\DomPDF\ServiceProvider::class,
        Barryvdh\Snappy\ServiceProvider::class,
        Intervention\Image\ImageServiceProvider::class,
        SocialiteProviders\Manager\ServiceProvider::class,

        // BookStack custom service providers
        \BookStack\App\Providers\ThemeServiceProvider::class,
        \BookStack\App\Providers\AppServiceProvider::class,
        \BookStack\App\Providers\AuthServiceProvider::class,
        \BookStack\App\Providers\EventServiceProvider::class,
        \BookStack\App\Providers\RouteServiceProvider::class,
        \BookStack\App\Providers\TranslationServiceProvider::class,
        \BookStack\App\Providers\ValidationRuleServiceProvider::class,
        \BookStack\App\Providers\ViewTweaksServiceProvider::class,
    ],

    // Class Aliases
    // This array of class aliases to be registered on application start.
    'aliases' => Facade::defaultAliases()->merge([
        // Laravel Packages
        'Socialite'    => Laravel\Socialite\Facades\Socialite::class,

        // Third Party
        'ImageTool' => Intervention\Image\Facades\Image::class,

        // Custom BookStack
        'Activity'    => BookStack\Facades\Activity::class,
        'Theme'       => BookStack\Facades\Theme::class,
    ])->toArray(),

    // Proxy configuration
    'proxies' => env('APP_PROXIES', ''),

];
