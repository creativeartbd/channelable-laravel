<?php

use App\Http\Controllers\Auth\AuthController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register')->name('register');
    Route::post('logout', 'logout')->name('logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me')->name('profile');

});


Route::group(['middleware' => 'jwt.verify'], function ($router) {
    Route::post('logout', 'Auth\AuthController@logout');
//    Route::post('refresh', 'Auth\AuthController@refresh');
//    Route::post('me', 'Auth\AuthController@me');
//    Route::post('user/lang', 'Auth\AuthController@updateLang');
//    Route::post('change/password', 'Auth\AuthController@changePassword');
//    Route::post('user/update', 'Auth\AuthController@update');






});
