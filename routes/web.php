<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientReportController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

// Route::resource('/dashboard',DashboardController::class);
Route::group(['middleware' => 'auth'], function() {
    Route::resource('/dashboard',DashboardController::class);
    Route::resource('/patient', PatientController::class);
    Route::get('patient-report/report-list/{id}',[PatientReportController::class, 'reportList'])->name('patient-report.report-list');
    Route::get('patient-report/create-report/{id}',[PatientReportController::class, 'createReport'])->name('patient-report.create-report');
    Route::resource('/patient-report', PatientReportController::class);
    Route::get('chart/report-data',[ChartController::class, 'reportData'])->name('chart.report-data');
    Route::resource('/chart',ChartController::class);
    Route::get('statement/statement-data',[StatementController::class, 'statementData'])->name('statement.statement-data');
    Route::resource('/statement',StatementController::class);

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('guest');
    Route::get('/edit', [RegisteredUserController::class, 'edit'])->name('edit');
    Route::post('/update', [RegisteredUserController::class, 'update'])->name('register.update');
});
require __DIR__.'/auth.php';
