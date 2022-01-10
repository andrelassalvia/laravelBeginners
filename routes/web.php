<?php

use App\Http\Controllers\HelloController;
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

Route::get('/hello', 'HelloController@index');
Route::get('/about', 'HelloController@about');

// Services
Route::get('/service','ServiceController@index')->name('service.index');
Route::post('/service','ServiceController@store');

// Customers
Route::get('/customers', 'CustomerController@index')->name('customer.index');
Route::get('/customers/create', 'CustomerController@create')->name('customer.create');
Route::post('/customers', 'CustomerController@store')->name('customer.store');