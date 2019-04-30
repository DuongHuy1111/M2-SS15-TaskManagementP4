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

Route::prefix('tasks')->group(function (){
    Route::get('index', function (){
        return view('modules.customer.index');
    });

    Route::get('tasks/create', 'TaskController@create')->name('create');

    Route::post('tasks', 'TaskController@store')->name('store');

    Route::get('tasks/{tasksId}/show', 'TaskController@show')->name('show');

    Route::get('tasks/{tasksId}/edit', 'TaskController@edit')->name('edit');

//    Route::patch('tasks/{tasksId}/update', 'TaskController@update')->name('update');
//
//    Route::delete('tasks/{photo}/delete', 'TaskController@delete')->name('delete');
});