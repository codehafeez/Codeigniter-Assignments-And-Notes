<?php

if(!isset($routes)) { 
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function($subroutes){
    $subroutes->add('', 'Dashboard::index');
	$subroutes->add('dashboard', 'Dashboard::index');
});