<?php

use App\Http\Controllers\HelloController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

// ================================================================================ //

// Questionnaires
Route::get('/questionnaire/create', 'QuestionnaireController@create')->middleware(['auth'])->name('questionnaire.create');
Route::post('questionnaire', 'QuestionnaireController@store')->name('questionnaire.store');
Route::get('questionnaire/show/{questionnaire}', 'QuestionnaireController@show')->name('questionnaire.show');

// Questions
Route::get('questionnaire/show/{questionnaire}/questions/create', 'QuestionController@create')->middleware(['auth'])->name('question.create');
Route::post('questionnaire/{questionnaire}/question', 'QuestionController@store')->middleware(['auth'])->name('question.store');
Route::delete('questionnaire/{questionnaire}/question/{question}', 'QuestionController@destroy')->middleware(['auth'])->name('question.destroy');

// Suerveys
Route::get('surveys/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('surveys/{questionnaire}-{slug}', 'SurveyController@store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
