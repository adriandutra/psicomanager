<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'FrontEnd\API\UserController@login');
Route::post('register', 'FrontEnd\API\UserController@register');
Route::post('refreshtoken', 'FrontEnd\API\UserController@refreshToken');

Route::get('/unauthorized', 'FrontEnd\API\UserController@unauthorized');
Route::group(['middleware' => ['CheckClientCredentials','auth:api']], function() {
    Route::post('logout', 'FrontEnd\API\UserController@logout');
    Route::post('details', 'FrontEnd\API\UserController@details');
});


