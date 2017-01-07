<?php
$actions = [];
$class_scope = [

];

$actions['login'] = function($request) use ($class_scope)
{
    dump($request);
    require_once dirname(__DIR__).'/Views/dashboardView.php';
};