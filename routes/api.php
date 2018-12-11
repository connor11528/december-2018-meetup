<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'AuthController@register');

Route::post('/login', 'AuthController@login');

Route::post('/logout', 'AuthController@logout');

Route::get('/tasks', 'TaskController@index')->name('tasks.index');

Route::post('/tasks', 'TaskController@store')->name('tasks.store');

Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');

Route::put('/tasks/{task}', 'TaskController@update')->name('tasks.update');

Route::delete('/tasks/{task}', 'TaskController@destroy')->name('tasks.destroy');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
