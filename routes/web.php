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

// //Task 12
// Route::get('/', 'HomeController@home');
// Route::get('/register', 'AuthController@register');
// Route::post('/welcome','AuthController@welcome');

// //Task 13
// Route::get('/', 'HomeController@task');
// Route::get('/dataTable', 'HomeController@data');

//Task 15


//Task 16
// Route::resource('question', 'QuestionController');
Auth::routes();

Route::middleware(['auth'])->group(function (){
    // Home
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    //Question
    Route::get('/question', 'QuestionController@index');
    Route::get('/question/create', 'QuestionController@create');
    Route::get('/question/{question}', 'QuestionController@show');
    Route::post('/question', 'QuestionController@store');
    Route::delete('/question/{question}', 'QuestionController@destroy');
    Route::get('/question/{question}/edit','QuestionController@edit');
    Route::patch('/question/{question}','QuestionController@update');

    //Answer
    Route::post('/answer', 'AnswerController@store');
    Route::delete('/answer/{answer}', 'AnswerController@destroy');
    Route::patch('/answer/{answer}','AnswerController@update');
});


