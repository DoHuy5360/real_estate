<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
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

Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('/');

Route::get('/projects/edit/{project_id}', [ProjectsController::class, 'editProject'])->middleware(['auth'])->name('projects');
Route::post('/projects/edit/{project_id}', [ProjectsController::class, 'updateProjectController'])->middleware(['auth'])->name('projects');
Route::get('/projects/{project_id}', [ProjectsController::class, 'showProject'])->middleware(['auth'])->name('projects');
Route::post('/projects/{project_id}', [ProjectsController::class, 'addToCart'])->middleware(['auth'])->name('projects');
Route::get('/projects', [ProjectsController::class, 'index'])->middleware(['auth'])->name('projects');

Route::get('/cart/{product_id}', [CartController::class, 'deleteProduct'])->middleware(['auth'])->name('cart') ;
Route::get('/cart', [CartController::class, 'index'])->middleware(['auth'])->name('cart') ;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
