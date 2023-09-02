<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('events')->group(function () {
    Route::get('/{id}', [EventController::class, 'index'])->name('events.index');
});

Route::prefix('checkout')->group(function () {
    Route::get('/{id}', [BillController::class, 'index'])->name('checkout.index');
    Route::post('/{id}', [BillController::class, 'store'])->name('checkout.store');
});

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'admin'])->name('admin.dashboard');

    Route::prefix('events')->group(function() {
        Route::get('/', [EventController::class, 'admin'])->name('admin.events');
    });

    Route::prefix('tickets')->group(function () {
        Route::get('/', [TicketController::class, 'admin'])->name('admin.tickets');
    });

    Route::prefix('categories')->group(function() {
        Route::get('/', [CategoryController::class, 'admin'])->name('admin.categories');
    });

    Route::prefix('bills')->group(function() {
        Route::get('/', [BillController::class, 'admin'])->name('admin.bills');
    });

});

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});




require __DIR__.'/auth.php';