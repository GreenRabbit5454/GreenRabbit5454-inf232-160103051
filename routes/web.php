<?php

Route::get('/', 'MainController@home');
Route::get('/about', 'MainController@about');
//Route::get('/about', action:'MainController@about');

Route::get('/article', 'MainController@article')->name('article');

Route::post('/article/check', 'MainController@article_check');

Route::resource('/student2', 'StudentsController');


Route::get('/student', 'StudentsController@index');
Route::get('/details/{id}', 'StudentsController@display');
