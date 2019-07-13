<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/quiz', 'QuizController@index')->name('quiz');

Route::get('/nextQuestion', 'QuizController@fetchNextQuestion')->name('nextQuestion');

Route::post('/save', 'QuizController@saveUserResponse')->name('save');

Route::get('/result', 'QuizController@showResult')->name('result');

Route::get('/topresults', 'QuizController@topResults')->name('topresults');


