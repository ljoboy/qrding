<?php

declare(strict_types=1);

use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');

Route::get('/', fn () => redirect('/dashboard'));

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('users', UsersController::class)->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';

Route::fallback(fn () => view('errors.404'))->name('404');
