<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
* This ones get the route model binding
*/
Route::get('/questions/{question}/edit', 'QuestionsController@edit');
Route::delete('/questions/{question}', 'QuestionsController@destroy');

Route::resource('questions', 'QuestionsController');


// to add new Options to the question
route::post('/question_option/{question}/add', 'QuestionsController@addOption');

route::post('/question_option/{question_option}/remove', 'QuestionsController@removeOption');

Route::patch('/question_option/{question_option}/save', 'QuestionsController@saveQuestionOption');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'QuestionsController@index');
});
