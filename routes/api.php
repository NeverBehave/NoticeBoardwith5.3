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

// 登录相关
Route::post('/username', 'Auth\LoginController@verifyUsername');
Route::get('now', function () {
	return date("Y-m-d H:i:s");
});
