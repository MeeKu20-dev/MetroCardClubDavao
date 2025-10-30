<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MemberController;

// Members
Route::get('/members', [MemberController::class, 'index'])->name('members');

// Registration 
Route::get('/registration', [RegistrationController::class, 'create'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');
