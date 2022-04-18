<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\MainController@index');

Route::post('/feedback', '\App\Http\Controllers\FeedbackController@send');

Auth::routes();
