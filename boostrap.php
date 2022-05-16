<?php

use Matscode\Paystack\Paystack;
use Philo\Blade\Blade;

// require flightPHP
require 'vendor/autoload.php';

// load env variables.
(Dotenv\Dotenv::createImmutable(__DIR__))->safeLoad();

// register view rendering library/helper
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new Blade($views, $cache);
Flight::map('view', function($view_name, $view_data = []) use ($blade){
   echo $blade->view()->make($view_name, $view_data)->render();
});


// register paystack SDK
Flight::map('paystack', function (){
   return new Paystack($_ENV['paystack_secret']);
});

// Load routes
$routes = require 'routes.php';

foreach ($routes as $route => $action) {
    Flight::route($route, $action);
}

// start Flight
Flight::start();
