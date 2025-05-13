<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wolfControlller;

Route::get('/', function () {
    return view('add_wolf');
})->name('add_wolf');

Route::get('/overview', wolfControlller::class . '@overview')->name('overview');
