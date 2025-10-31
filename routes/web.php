<?php

use App\Http\Controllers\AuthorityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/',[AuthorityController::class,'signup']);
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

    Route::get('/logout', [AuthorityController::class, 'logout'])->name('logout');
});
Route::get('/clear-all', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');

    return '<h3 style="color:green;">✅ All caches cleared & optimized successfully!</h3>';
});