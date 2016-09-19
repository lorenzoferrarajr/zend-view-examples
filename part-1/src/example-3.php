<?php

include __DIR__ . '/../vendor/autoload.php';

$resolver1 = new \Zend\View\Resolver\TemplatePathStack([
    'script_paths' => [
        'view/sub1/',
    ]
]);

$resolver2 = new \Zend\View\Resolver\TemplateMapResolver([
    'first-view' => 'view/view-1.phtml'
]);

$aggregateResolver = new \Zend\View\Resolver\AggregateResolver();
$aggregateResolver->attach($resolver1);
$aggregateResolver->attach($resolver2);

var_dump($aggregateResolver->resolve('first-view')); // 'view/view-1.phtml'
var_dump($aggregateResolver->resolve('view-1')); // bool(false)
var_dump($aggregateResolver->resolve('view-1.phtml')); // bool(false)
var_dump($aggregateResolver->resolve('view-2')); // bool(false)
var_dump($aggregateResolver->resolve('view-3')); // '/.../view/sub1/view-3.phtml'
