<?php

/**
 * Broadcasting configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // Default Broadcaster
    // This option controls the default broadcaster that will be used by the
    // framework when an event needs to be broadcast. This can be set to
    // any of the connections defined in the "connections" array below.
    'default' => env('BROADCAST_DRIVER', 'pusher'),

    // Broadcast Connections
    // Here you may define all of the broadcast connections that will be used
    // to broadcast events to other systems or over websockets. Samples of
    // each available type of connection are provided inside this array.
    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_KEY'),
            'secret' => env('PUSHER_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

    ],

];
