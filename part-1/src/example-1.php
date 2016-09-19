<?php

include __DIR__ . '/../vendor/autoload.php';

$resolver = new \Zend\View\Resolver\TemplateMapResolver([
    'first-view' => 'view/view-1.phtml'
]);
var_dump($resolver->resolve('first-view')); // 'view/view-1.phtml'
