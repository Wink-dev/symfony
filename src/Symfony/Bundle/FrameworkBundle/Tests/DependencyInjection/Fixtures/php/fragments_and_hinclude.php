<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'fragments' => [
        'enabled' => true,
        'hinclude_default_template' => 'global_hinclude_template',
    ],
]);
