<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('add_wolf');
})->name('add_wolf');

Route::get('/overview', function () {
    return view('overview');
})->name('overview');
