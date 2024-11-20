<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'csrf_protection' => false,
    'form' => [
        'enabled' => true,
        'csrf_protection' => true,
    ],
    'http_method_override' => false,
    'handle_all_throwables' => true,
    'php_errors' => ['log' => true],
]);
