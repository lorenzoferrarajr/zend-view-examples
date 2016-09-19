<?php

include __DIR__ . '/../vendor/autoload.php';

$resolver = new \Zend\View\Resolver\TemplatePathStack([
    'script_paths' => [
        'view/sub1/'
    ]
]);
var_dump($resolver->resolve('view-3.phtml')); // '/.../view/sub1/view-3.phtml'
var_dump($resolver->resolve('view-3')); // '/.../view/sub1/view-3.phtml'
