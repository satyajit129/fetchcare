<?php

use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthorityController::class,'signup'])->name('signup');
Route::get('/signup',[AuthorityController::class,'signup'])->name('signup');
Route::post('/register',[AuthorityController::class,'register'])->name('register');
Route::get('/login',[AuthorityController::class,'login'])->name('login');
Route::post('/login-request',[AuthorityController::class,'loginRequest'])->name('loginRequest');


// Protected routes (only for logged-in users)
Route::middleware(['auth'])->group(function () {
    Route::get('/operational-management', [AuthorityController::class, 'operationalManagement'])->name('operationalManagement');
    Route::get('/finance-management', [AuthorityController::class, 'financeManagement'])->name('financeManagement');
    Route::get('/client-management', [AuthorityController::class, 'clientManagement'])->name('clientManagement');
    Route::get('/schedule-management', [AuthorityController::class, 'scheduleManagement'])->name('scheduleManagement');
    Route::get('/marketing-management', [AuthorityController::class, 'marketingManagement'])->name('marketingManagement');
    Route::get('/fetch-ai', [AuthorityController::class, 'fetchAI'])->name('fetchAI');
    Route::get('/settings', [AuthorityController::class, 'settings'])->name('settings');
});
