<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\publicController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');
Route::middleware(['auth'])->prefix('projects')->group(
    function () {
        Route::group(
            ['prefix' => 'update'],
            function () {
                Route::post('/', [ProjectsController::class, 'updateProject'])->name('projects.update');
            }
        );
        Route::group(
            ['prefix' => 'add'],
            function () {
                Route::post('/cart', [ProjectsController::class, 'addToCart'])->name('projects.view');
                Route::get('/project', [ProjectsController::class, 'addProject'])->name('projects.add');
                Route::post('/project', [ProjectsController::class, 'saveProject'])->name('projects.view');
            }
        );
        Route::post('/delete', [ProjectsController::class, 'deleteProject']);
        Route::get('/{project_id}', [ProjectsController::class, 'showProject'])->name('projects.view');
        Route::get('/', [ProjectsController::class, 'index'])->name('projects.projects');
    }
);
Route::middleware(['auth'])->prefix('cart')->group(function () {
    Route::get('/{product_id}', [CartController::class, 'deleteProduct'])->name('cart.cart');
    Route::get('/', [CartController::class, 'index'])->name('cart.cart');
});

Route::post('/user/edit', [UserController::class, 'editInformation']);

Route::get('/', [publicController::class, 'index']);
require __DIR__ . '/auth.php';
