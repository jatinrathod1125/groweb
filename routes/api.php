<?php

use App\Http\Controllers\Admin\AdminBannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Banner save endpoint
Route::post('/banners/save', [AdminBannerController::class, 'store']);
