<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home'); });

// register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register');

// reset password (TO-DO)
Route::get('/reset-password', [UserController::class, 'forgot'])->name('reset-password');
Route::put('/reset-password', [UserController::class, 'update'])->middleware('admin')->name('reset-password');

// login, logout
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest')->name('login');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

// guide
Route::get('/guide', function () {return view('guide');});

// tracker (TO-DO)
Route::get('/tracker', [TripController::class, 'create'])->name('tracker.create');
Route::post('/tracker', [TripController::class, 'store'])->name('tracker.store');
Route::get('/tracker/{trip}/details', [TripController::class, 'view'])->name('tracker.view');
Route::delete('/tracker/{trip}/delete', [TripController::class, 'delete'])->name('tracker.delete');
Route::put('/tracker', [TripController::class, 'edit'])->name('tracker.edit'); //edit trip details

Route::get('/trip/{trip}/create-expenses', [ExpenseController::class, 'create'])->name('expense.create');
Route::post('/trip/{trip}/create-expenses', [ExpenseController::class, 'store'])->name('expense.store');

// transfer
Route::get('/transfer', function () { return view('transfer');});

// FAQ
Route::get('/frequently-asked-questions', function () { return view('faq'); });

// profile (TO-DO)
Route::get('/user-profile', [UserController::class, 'create']);
Route::delete('/delete-user', [UserController::class, 'destroy'])->name('delete-user');
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('update-user');

