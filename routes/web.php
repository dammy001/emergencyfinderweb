<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/services', 'ServiceController@index')->name('service');
Route::get('/addprovider', 'ServiceController@add')->name('addservice');
Route::post('/addservice', 'ServiceController@store')->name('addservice.store');
Route::get('/servicedetails/{id}', 'ServiceController@show')->name('service.view');

Route::get('/contact', 'ServiceController@contact')->name('contact');
//Route::get('/servicedetails', 'HomeController@details')->name('details');

Route::any('/search', 'ServiceController@search')->name('search');

//Route::get('/home', 'HomeController@index')->name('home');
