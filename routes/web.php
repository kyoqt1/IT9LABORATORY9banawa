<?php
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'handleForm'])->name('register.submit');
Route::get('/success', [RegistrationController::class, 'success'])->name('register.success');
