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

$app->get('/', function () use ($app) {
    return $app->version();
});


/**
 * Routes for resource advertisements
 */
$app->get('advertisements', 'AdvertisementsController@all');
$app->get('advertisements/{id}', 'AdvertisementsController@get');
$app->post('advertisements', 'AdvertisementsController@add');
$app->put('advertisements/{id}', 'AdvertisementsController@put');
$app->delete('advertisements/{id}', 'AdvertisementsController@remove');


