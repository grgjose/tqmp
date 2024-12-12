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
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/faqs', [HomeController::class, 'FAQs'])->name('home.faqs');

// Product Pages
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/bulletproofing', [BulletProofingController::class, 'index'])->name('bulletproofing.index');
Route::get('/glassmanufacturing', [GlassManufacturingController::class, 'index'])->name('glass.manufacturing.index');
Route::get('/aluminummanufacturing', [AluminumManufacturingController::class, 'index'])->name('aluminum.manufacturing.index');
Route::get('/glassprocessing', [GlassProcessingController::class, 'index'])->name('glass.processing.index');
Route::get('/gentrade', [GenTradeController::class, 'index'])->name('gentrade.index');