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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */


    //Route::get('/demo','AdminController@demo');
    Route::post('login', 'APILoginController@login');
    Route::post('register', 'APILoginController@store');
    Route::post('logout', 'APILoginController@logout');


    //Route::get('/demo','AdminController@demo');
    Route::post('serviceproviderlogin', 'ServiceProviderController@login');
    Route::get('getserviceproviders', 'ServiceProviderController@getservice');


// users is a route protected by jwt
Route::middleware('jwt.auth')->get('users', function () {
    return auth('api')->user();
});
