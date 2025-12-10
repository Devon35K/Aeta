<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/historical-journey', function () {
    return view('historical-journey');
});

Route::get('/traditions-culture', function () {
    return view('traditions-culture');
});

Route::get('/livelihood', function () {
	return view('livelihood');
});

Route::get('/aeta', function () {
	return view('layouts.aeta');
});
