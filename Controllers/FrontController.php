<?php

$actions = [];
$class_scope = [
    
];

$actions['index'] = function($request) use ($class_scope)
{
    require_once dirname(__DIR__).'/Views/indexView.php';
};

