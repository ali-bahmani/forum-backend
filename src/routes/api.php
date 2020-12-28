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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v01', 'as' => 'v01'], function () {
    
    Route::group(['prefix' => 'auth', 'as' => 'auth'], function () {

        Route::post('/register', 'App\Http\Controllers\Api\V01\Auth\AuthController@register')->name('register');

        Route::post('/login', 'App\Http\Controllers\Api\V01\Auth\AuthController@login')->name('login');

        Route::post('/logout', 'App\Http\Controllers\Api\V01\Auth\AuthController@logout')->name('logout');
    });
});
