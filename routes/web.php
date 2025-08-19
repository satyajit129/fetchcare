<?php

use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [AuthorityController::class,'index'])->name('index');
