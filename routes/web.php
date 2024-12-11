<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BulletProofingController;
use App\Http\Controllers\GlassManufacturingController;
use App\Http\Controllers\AluminumManufacturingController;
use App\Http\Controllers\GlassProcessingController;
use App\Http\Controllers\GenTradeController;

// Home Pages
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/', [HomeController::class, 'about'])->name('home.index');
Route::get('/', [HomeController::class, 'contact'])->name('home.index');
Route::get('/', [HomeController::class, 'FAQs'])->name('home.index');

// Product Pages
Route::get('/', [ServicesController::class, 'index'])->name('services.index');
Route::get('/', [BulletProofingController::class, 'index'])->name('bulletproofing.index');
Route::get('/', [GlassManufacturingController::class, 'index'])->name('glass.manufacturing.index');
Route::get('/', [AluminumManufacturingController::class, 'index'])->name('aluminum.manufacturing.index');
Route::get('/', [GlassProcessingController::class, 'index'])->name('glass.processing.index');
Route::get('/', [GenTradeController::class, 'index'])->name('gentrade.index');