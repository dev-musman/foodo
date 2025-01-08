<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Site\PagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuTypesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/menus/available-days', [MenuController::class, 'getAvailableDays'])->name('menus.available-days');

    Route::resource('pages', PageController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('menu-types', MenuTypesController::class);
});

Route::get('/meals', [MenuController::class, 'search'])->name('menus.search');
Route::post('/meal-plan', [MenuController::class, 'update_plan'])->name('mealPlan.update');
Route::delete('/meal-plan', [MenuController::class, 'remove']);
Route::get('/meal-plan/{week}', [MenuController::class, 'show']);


require __DIR__ . '/auth.php';
// client
Route::get('/{slug?}', [PagesController::class, 'show'])->where('slug', '^(?!(admin|logout|login)(\/|$))[A-Za-z0-9+-_\/]+')->name('page');
