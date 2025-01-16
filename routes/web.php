<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlockController;

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

// Route::get('/', function () {
//     return view('user.index');
// });

Route::get('/', function () {
    return view('admin.block.index');
})->name('/');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/account', [AccountController::class, 'index'])->name('account-index');
Route::get('/Edit-Account', [AccountController::class, 'Edit'])->name('Edit-Account');
Route::get('/Detail-Account', [AccountController::class, 'Detail'])->name('Detail-Account');
Route::post('/Add-Account', [AccountController::class, 'add'])->name('add-account');



// Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');
// Route::post('/store', [LandingpageController::class, 'store'])->name('landingpage.store');