<?php

use App\Http\Controllers\HelloController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/email', function () {

//     Mail::to('andrelassalvia@gmail.com')->send(new WelcomeMail());

//     return new WelcomeMail();
// });

Route::get('/hello', 'HelloController@index');
Route::get('/about', 'HelloController@about');

// Services
Route::get('/service','ServiceController@index')->name('service.index');
Route::post('/service','ServiceController@store');

// Customers
Route::get('/customers', 'CustomerController@index')->name('customer.index');
Route::get('/customers/create', 'CustomerController@create')->name('customer.create');
Route::post('/customers', 'CustomerController@store')->name('customer.store');
Route::get('customers/show/{id}','CustomerController@show')->name('customer.show');
Route::get('customers/{id}/edit','CustomerController@edit')->name('customer.edit');
Route::any('customers/{id}', 'CustomerController@update')->name('customer.update');
Route::delete('customers/{id}','CustomerController@destroy')->name('customer.delete');