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
$router->group(['prefix'=>'posts'],function () use($router){
    $router->get('all', 'PostsController@all');
});

$router->group(['prefix'=>'categories'], function () use ($router){
    $router->get('all', 'CategoriesController@all');
});

