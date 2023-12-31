<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardPetugasController;
use App\Http\Controllers\DashboardActivityController;
use App\Http\Controllers\LoginController;
use App\Models\Petugas;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/visi-misi', [AboutController::class, 'visiMisi']);
Route::get('/about/activities', [AboutController::class, 'activities']);
Route::get('/about/activities/{activity:slug}', [AboutController::class, 'activity']);
Route::get('/about/petugas', [AboutController::class, 'petugas']);
Route::get('/about/petugas/{petugas:slug}', [AboutController::class, 'petugasSingle']);
Route::get('/about/tasks', [AboutController::class, 'tasks']);
Route::get('/about/task/{task:slug}', [AboutController::class, 'task']);
Route::get('/about/schedule', [AboutController::class, 'schedule']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/petugas', DashboardPetugasController::class)->middleware('auth');

Route::resource('/dashboard/activities', DashboardActivityController::class)->middleware('auth');

// Route::resource([
//     'petugas' => DashboardPetugasController::class,
//     'activities' => DashboardActivityController::class,
// ])->middleware('auth');
