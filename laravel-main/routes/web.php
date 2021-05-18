<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'mainController@indexView');
Route::get('serie/{index}', 'mainController@serieView') -> name('thisSerie');