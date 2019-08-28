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

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users', 'UserController@users');
Route::get('users/profile', 'UserController@profile')->middleware('auth:api');
Route::get('users/{id}', 'UserController@profileById')->middleware('auth:api');
Route::post('post', 'PostController@add')->middleware('auth:api');
Route::put('post/edit/{post}', 'PostController@update')->middleware('auth:api');
Route::delete('post/delete/{post}', 'PostController@delete')->middleware('auth:api');
