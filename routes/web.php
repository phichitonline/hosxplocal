<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\PatientInfoController;
// use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PatientInfoController::class, 'index'])->name('dashboard');
Route::get('checkup', [PatientInfoController::class, 'checkup'])->name('checkup');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

