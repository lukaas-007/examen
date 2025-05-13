<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wolfControlller;

Route::get('/', function () {
    return view('add_wolf');
})->name('add_wolf');

Route::post('/add_wolf', wolfControlller::class . '@add')->name('add');

Route::get('/overview', wolfControlller::class . '@overview')->name('overview');
