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
Route::get('/1', [HomeController::class, 'about'])->name('home.index');
Route::get('/2', [HomeController::class, 'contact'])->name('home.index');
Route::get('/3', [HomeController::class, 'FAQs'])->name('home.index');

// Product Pages
Route::get('/4', [ServicesController::class, 'index'])->name('services.index');
Route::get('/5', [BulletProofingController::class, 'index'])->name('bulletproofing.index');
Route::get('/6', [GlassManufacturingController::class, 'index'])->name('glass.manufacturing.index');
Route::get('/7', [AluminumManufacturingController::class, 'index'])->name('aluminum.manufacturing.index');
Route::get('/8', [GlassProcessingController::class, 'index'])->name('glass.processing.index');
Route::get('/9', [GenTradeController::class, 'index'])->name('gentrade.index');