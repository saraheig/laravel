<?php

use Illuminate\Http\Request;
use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [], function (Router $api) {
    $api->get('features', 'App\Http\Controllers\Api\V1\FeatureController@index');
});

$api->version('v1', [], function (Router $api) {
    $api->post('new', 'App\Http\Controllers\Api\V1\FeatureController@store');
});

