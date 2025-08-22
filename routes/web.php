<?php

use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/operational-management', [AuthorityController::class,'operationalManagement'])->name('operationalManagement');
Route::get('/finance-management',[AuthorityController::class,'financeManagement'])->name('financeManagement');
