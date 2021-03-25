<?php

use App\Http\Controllers\PatientInfoController;
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

// Route::get('/','HomeController@index');

Route::get('/', [PatientInfoController::class, 'index'])->name('dashboard');
Route::get('checkup', [PatientInfoController::class, 'checkup'])->name('checkup');

// Route::get('patientinfo', [PatientInfoController::class, 'index'])->name('patientinfo');

