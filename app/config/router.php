<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', array(
    'controller' => 'index',
    'action' => 'index'
));

$router->handle($_SERVER['REQUEST_URI']);
