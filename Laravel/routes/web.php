<?php


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/about', function () {
    $cuie = 7;
    return view('about', compact('cuie'));
});