<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['auth'], 'namespace' => 'App\Http\Controllers'], function ($router) {

    Route::get('/', 'MainController@getIndex')->name('index');

});
