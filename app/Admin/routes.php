<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
    $router->resource('categories', CategorieController::class);

    $router->resource('annonces', AnnonceController::class);

    $router->resource('documents', DocumentController::class);

    $router->resource('programmes', ProgrammeController::class);

    $router->resource('services', ServiceController::class);

    $router->resource('evenements', EvenementController::class);

    $router->resource('users', UserController::class);



});

