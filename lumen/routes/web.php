<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Documentation Page
$router->get('/', function () {
    return view('documentation');
});

// Vessels
$router->group(['prefix' => 'vessels'], function() use ($router) {
    $router->get('', 'VesselController@index');
    $router->get('/{id}', 'VesselController@show');
    $router->get('/{id}/reports', 'VesselController@reports');
});

// Reports
$router->group(['prefix' => 'reports'], function() use ($router) {
    $router->get('', 'ReportController@index');
    $router->get('/{id}', 'ReportController@show');
});

// Users
$router->group(['prefix' => 'users'], function() use ($router) {
    $router->get('', 'UserController@index');
    $router->get('/{id}', 'UserController@show');
    $router->get('/{id}/requests', 'UserController@requests');
});
