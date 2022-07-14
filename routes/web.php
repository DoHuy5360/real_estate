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
Route::middleware(['auth'])->prefix('projects')->group(
    function () {
        Route::group(
            ['prefix' => 'edit'],
            function () {
                Route::get('/{project_id}', [ProjectsController::class, 'editProject'])->name('projects.edit');
                Route::post('/{project_id}', [ProjectsController::class, 'updateProjectController'])->name('projects.edit');
            }
        );
        Route::get('/{project_id}', [ProjectsController::class, 'showProject'])->name('projects.view');
        Route::post('/{project_id}', [ProjectsController::class, 'addToCart'])->name('projects.view');
        Route::get('/', [ProjectsController::class, 'index'])->name('projects.projects');
    }
);
Route::middleware(['auth'])->prefix('cart')->group(function () {
    Route::get('/{product_id}', [CartController::class, 'deleteProduct'])->name('cart.cart');
    Route::get('/', [CartController::class, 'index'])->name('cart.cart');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
