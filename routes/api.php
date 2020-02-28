<?php

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
return $request->user();
}); */

Route::prefix('/v1')->name('v1.')->namespace('v1\Auth')->group(function () {
    Route::post('/login', 'UserController@login')->name('login');
    Route::post('/register', 'UserController@register')->name('register');
    Route::get('/prueba', 'UserController@prueba')->name('prueba');
   

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('details', 'UserController@details')->name('details');
    });
});

    
