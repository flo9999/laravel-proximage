<?php

return [

    'defaults' => [
        /*
         * Templates which would be applied to all proxied image.
         *
         * Each template must implement \Coderello\Proximage\Contracts\Template
         */
        'templates' => [
            // \Coderello\Proximage\Templates\DisableProxyingForLocalEnvironmentTemplate::class,
        ],
    ],

];
