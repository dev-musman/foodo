<?php

use App\Http\Controllers\Admin\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Site\PagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuTypesController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\OrderController as SiteOrderController;

// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/history', [DashboardController::class, 'history'])->name('history');
    Route::get('/menus/available-days', [MenuController::class, 'getAvailableDays'])->name('menus.available-days');

    Route::resource('pages', PageController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('menu-types', MenuTypesController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::resource('customers', CustomersController::class);

    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/update-order-status/{id}', [OrderController::class, 'updateOrderStatus'])->name('orders.status');
    Route::get('/order/edit/{mealPlan}', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/order/update/{mealPlan}', [OrderController::class, 'update'])->name('orders.update');
    Route::get('/order/deltails/{mealPlan}', [OrderController::class, 'details'])->name('orders.details');
    Route::delete('/order/delete/{mealPlan}', [OrderController::class, 'destroy'])->name('orders.destroy');
});
Route::get('/de', [SiteOrderController::class, 'show']);

require __DIR__ . '/auth.php';
// client
Route::post('/create-order', [SiteOrderController::class, 'createOrder'])->name('orders.menu');
Route::get('/{slug?}', [PagesController::class, 'show'])->where('slug', '^(?!(admin|logout|login)(\/|$))[A-Za-z0-9+-_\/]+')->name('page');


