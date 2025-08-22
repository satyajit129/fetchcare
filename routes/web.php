<?php

use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/operational-management', [AuthorityController::class,'operationalManagement'])->name('operationalManagement');
Route::get('/finance-management',[AuthorityController::class,'financeManagement'])->name('financeManagement');
Route::get('/client-management',[AuthorityController::class,'clientManagement'])->name('clientManagement');
Route::get('/schedule-management',[AuthorityController::class,'scheduleManagement'])->name('scheduleManagement');
Route::get('/marketing-management',[AuthorityController::class,'marketingManagement'])->name('marketingManagement');
