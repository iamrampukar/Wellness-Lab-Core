<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientReportController;
use App\Http\Controllers\ChartController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::resource('/dashboard',DashboardController::class);
Route::resource('/patient', PatientController::class);
Route::resource('/patient-report', PatientReportController::class);
Route::get('patient-report/create-report/{id}',[PatientReportController::class, 'createReport'])->name('patient-report.create-report');
Route::resource('/chart',ChartController::class);

require __DIR__.'/auth.php';
