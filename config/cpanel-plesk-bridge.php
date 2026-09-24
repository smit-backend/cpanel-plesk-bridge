<?php

return [
    'enabled' => env('CPANEL_PLESK_BRIDGE_ENABLED', true),
    'timeout' => env('CPANEL_PLESK_BRIDGE_TIMEOUT', 30),
    'log_channel' => env('CPANEL_PLESK_BRIDGE_LOG', 'stack'),
];
