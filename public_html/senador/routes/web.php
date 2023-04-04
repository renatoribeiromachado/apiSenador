<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    ServiceController
};

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

/**
 * Routes Services
 */

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth'])
    ->group(function(){
        Route::get('services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('services/create', [ServiceController ::class, 'create'])->name('services.create');
        Route::post('services/store', [ServiceController::class, 'store'])->name('services.store');
        Route::get('services/{url}/edit', [ServiceController::class, 'edit'])->name('services.edit');
        Route::put('services/{url}', [ServiceController::class, 'update'])->name('services.update');
        Route::get('services/{url}', [ServiceController::class, 'show'])->name('services.show');
        Route::delete('services/{url}', [ServiceController::class, 'destroy'])->name('services.destroy');
        Route::any('services/search', [ServiceController::class, 'search'])->name('services.search');
 });


Route::get('/', function () {
    return view('welcome');
}); 
require __DIR__.'/auth.php';
