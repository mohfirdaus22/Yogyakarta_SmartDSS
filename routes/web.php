<?php

use App\Http\Controllers\KajianController;
use App\Http\Controllers\PermintaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpdController;
// use HomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\lppmController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [KajianController::class, 'index'])->name('home');


Route::get('/tentang', [HomeController::class, 'tentang'])->name("tentang");
Route::get('/pemberitahuan', [HomeController::class, 'pemberitahuan'])->name("pemberitahuan");
Route::get('/listadmin', [AdminController::class, 'index'])->name("listadmin");
Route::get('/opd', [HomeController::class, 'opd'])->name("opd");
Route::get('/reqdownload', [HomeController::class, 'reqdownload'])->name("reqdownload");
Route::get('/lppms', [LppmController::class, 'index2'])->name('lppms.index2');

Route::resource('admins', AdminController::class);
Route::resource('lppms', LppmController::class); //menghubungkan lppms 
Route::resource('rekomendasiopds', OpdController::class);
Route::resource('permintaans', PermintaanController::class);Route::get('/', [KajianController::class, 'index'])->name('kajians.index');
Route::get('/kajians/create', [KajianController::class, 'create'])->name('kajians.create');
Route::post('/kajians', [KajianController::class, 'store'])->name('kajians.store');
Route::get('/kajians/{id}/edit', [KajianController::class, 'edit'])->name('kajians.edit');
Route::put('/kajians/{id}', [KajianController::class, 'update'])->name('kajians.update');
Route::delete('/kajians/{id}', [KajianController::class, 'destroy'])->name('kajians.destroy');

// Define the search route
Route::get('/kajians/search', [KajianController::class, 'search'])->name('kajians.search');


// Route::get('/', function () {
//     return view('welcome');
// });
