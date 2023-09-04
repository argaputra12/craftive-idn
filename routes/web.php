<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

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

Route::prefix('checkout')->middleware('auth')->group(function () {
    Route::get('/{id}', [BillController::class, 'index'])->name('checkout.index');
    Route::post('/{id}', [BillController::class, 'store'])->name('checkout.store');
});

Route::prefix('order')->middleware('auth')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
    Route::get('/{id}', [OrderController::class, 'create'])->name('order.create');
    Route::post('/', [OrderController::class, 'store'])->name('order.store');
});


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'admin'])->name('admin.dashboard');

    Route::prefix('events')->group(function () {
        Route::get('/', [EventController::class, 'admin'])->name('admin.events');
        Route::get('/create', [EventController::class, 'create'])->name('admin.events.create');
        Route::post('/', [EventController::class, 'store'])->name('admin.events.store');
        Route::get('/{id}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
        Route::patch('/{id}', [EventController::class, 'update'])->name('admin.events.update');
        Route::delete('/{id}', [EventController::class, 'destroy'])->name('admin.events.destroy');
    });

    Route::prefix('tickets')->group(function () {
        Route::get('/', [TicketController::class, 'admin'])->name('admin.tickets');
        Route::get('/create', [TicketController::class, 'create'])->name('admin.tickets.create');
        Route::post('/', [TicketController::class, 'store'])->name('admin.tickets.store');
        Route::get('/{id}/edit', [TicketController::class, 'edit'])->name('admin.tickets.edit');
        Route::patch('/{id}', [TicketController::class, 'update'])->name('admin.tickets.update');
        Route::delete('/{id}', [TicketController::class, 'destroy'])->name('admin.tickets.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'admin'])->name('admin.categories');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::patch('/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });

    Route::prefix('bills')->group(function () {
        Route::get('/', [BillController::class, 'admin'])->name('admin.bills');
    });
});

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});




require __DIR__ . '/auth.php';
