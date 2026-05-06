<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});