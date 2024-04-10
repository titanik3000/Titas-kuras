<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuelRecordController;
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
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth'); 

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard'); // Welcome page only for logged-in users
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/fuel_records/create', [FuelRecordController::class, 'create'])->name('fuel_records.create');
Route::post('/fuel_records', [FuelRecordController::class, 'store'])->name('fuel_records.store');
Route::get('/fuel_records/{id}/edit', [FuelRecordController::class, 'edit'])->name('fuel_records.edit');
Route::put('/fuel_records/{fuel_record}', [FuelRecordController::class, 'update'])->name('fuel_records.update');
require __DIR__.'/auth.php';


