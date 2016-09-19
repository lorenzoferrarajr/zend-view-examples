<?php

include __DIR__ . '/../vendor/autoload.php';

$resolver = new \Zend\View\Resolver\TemplatePathStack([
    'script_paths' => [
        'view/',
    ]
]);

$renderer = new \Zend\View\Renderer\PhpRenderer();
$renderer->setResolver($resolver);
$content = $renderer->render('view-2', ['who' => 'Earth']);
var_dump($content); // string(13) "Hello, Earth!"
