<?php

use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;




Route::get('/', [BannerController::class, 'index'])->name('banners.index');
Route::get('admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');
Route::get('admin/banners', [AdminBannerController::class, 'index'])->name('admin.banners.index');
Route::get('admin/banners/create', [AdminBannerController::class, 'create'])->name('admin.banners.create');

Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');

