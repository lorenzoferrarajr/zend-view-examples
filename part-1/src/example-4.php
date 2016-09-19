<?php

include __DIR__ . '/../vendor/autoload.php';

$resolver = new \Zend\View\Resolver\TemplateMapResolver([
    'first-view' => 'view/view-1.phtml'
]);

$renderer = new \Zend\View\Renderer\PhpRenderer();
$renderer->setResolver($resolver);
var_dump($renderer->render('first-view')); // string(13) "Hello, World!"
