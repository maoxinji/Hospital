<?php

use Illuminate\Http\Request;

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


Route::namespace('API')->middleware('auth:api')->group(function () {
    // Controllers Within The "App\Http\Controllers\API" Namespace

	Route::get('photo/index', 'PhotoController@index');
    
	Route::get('photo/store', 'PhotoController@store');
});
