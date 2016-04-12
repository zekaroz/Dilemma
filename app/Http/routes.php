<?php

Route::group(['middleware' => ['web']], function () {

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // this ones are for public linking to questions
    Route::get('/dilemma/{question_key}', 'OnlineDilemma@getDilemma');

    // this ones are for public linking to questions
    Route::get('/question/{question_key}', 'OnlineDilemma@getPreview');

    Route::get('/dilema_new',function(){
        return view('public.template_new');
    });

    Route::get('/', 'QuestionsController@index');


    Route::get('/questions/{question}/edit', 'QuestionsController@edit');
    Route::delete('/questions/{question}', 'QuestionsController@destroy');

    Route::resource('questions', 'QuestionsController');


    // to add new Options to the question
    route::post('/question_option/{question}/add', 'QuestionsController@addOption');

    route::post('/question_option/{question_option}/remove', 'QuestionsController@removeOption');

    Route::patch('/question_option/{question_option}/save', 'QuestionsController@saveQuestionOption');

    Route::get('/users', 'UsersController@index');

    Route::get('/vue', function(){
        return view('exp.index');
    });
});
