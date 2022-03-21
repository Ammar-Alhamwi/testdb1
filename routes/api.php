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
Route::post('/login','AuthController@login');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/order', 'orderController@createOrder');
    Route::put('/table/{id}', 'orderController@update');
    Route::post('/order_datails','orderController@createOrder_datails');
    Route::resource('roles','UserManagement\RoleController');
    Route::resource('users','UserManagement\UserController');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
