<?php

return [
    'base_url' => env('TRANSLATION_API_URL', ''),

    'timeout' => env('TRANSLATION_API_TIMEOUT', 3),
    'connect_timeout' => env('TRANSLATION_API_CONNECT_TIMEOUT', 3),

    'default_target_lang' => 'zh-TW'
];