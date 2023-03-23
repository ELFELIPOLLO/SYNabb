<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\ReportarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', function () {
    return redirect()->route('grupos');
})->middleware(['auth'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/grupos', [GrupoController::class, 'consultar'])->name('grupos');
    Route::get('/grupos/6AMP', [AlumnoController::class, 'consultar6AMP'])->name('grupos6AMP');
    Route::get('/grupos/6AMO', [AlumnoController::class, 'consultar6AMO'])->name('grupos6AMO');
    Route::get('/grupos/4AMC', [AlumnoController::class, 'consultar4AMC'])->name('grupos4AMC');
    Route::get('/grupos/2AME', [AlumnoController::class, 'consultar2AME'])->name('grupos2AME');
    Route::get('/grupos/2AMCO', [AlumnoController::class, 'consultar2AMCO'])->name('grupos2AMCO');

    Route::get('/reportes', [ReportesController::class, 'consultar'])->name('reportes');
    Route::get('/reportes/6AMP', [ReportesController::class, 'consultar6AMP'])->name('reportes6AMP');
    Route::get('/reportes/6AMO', [ReportesController::class, 'consultar6AMO'])->name('reportes6AMO');
    Route::get('/reportes/4AMC', [ReportesController::class, 'consultar4AMC'])->name('reportes4AMC');
    Route::get('/reportes/2AME', [ReportesController::class, 'consultar2AME'])->name('reportes2AME');
    Route::get('/reportes/2AMCO', [ReportesController::class, 'consultar2AMCO'])->name('reportes2AMCO');

    Route::get('/reportar', [ReportarController::class, 'consultar'])->name('reportar');
    Route::post('/reportar/add', [ReportarController::class, 'add'])->name('add');
});
require __DIR__.'/auth.php';
