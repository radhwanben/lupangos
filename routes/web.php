<?php

use FastRoute\Dispatcher;

require "vendor/autoload.php";

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  
    // users login & registration routes
    $r->addRoute('GET', '/', 'views/login.php');
    $r->addRoute('GET', '/login', 'views/login.php');
    $r->addRoute('GET', '/register', 'views/register.php');
    $r->addRoute('GET', '/home', 'views/home.php');
    $r->addRoute('POST', '/register', 'class/checking.php');
    $r->addRoute('POST', '/', 'class/checking.php');
    $r->addRoute('POST', '/login', 'class/checking.php');
    //activation users accounts routes
    $r->addRoute('GET', '/activate/uname={username}&activation_code={code}', 'views/activate.php');
    // user home and profile
    $r->addRoute('GET', '/dashbord', 'views/users/dashbord.php');
    $r->addRoute('GET', '/profile', 'views/users/profile.php');
    $r->addRoute('POST', '/profile/update', 'class/checkingusers.php');
    $r->addRoute('GET', '/logout', 'class/logout.php');

    //admin routes
    $r->addRoute('GET', '/admin', 'views/admin/dashbord.php');

});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        require 'views/404.php';
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        require $handler;
        break;
}