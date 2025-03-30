<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BulletProofingController;
use App\Http\Controllers\GlassManufacturingController;
use App\Http\Controllers\AluminumManufacturingController;
use App\Http\Controllers\GlassProcessingController;
use App\Http\Controllers\GenTradeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderSummaryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;

// Home Pages
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/faqs', [HomeController::class, 'FAQs']);
Route::get('/userprofiles', [HomeController::class, 'userprofiles']);

// Product Pages
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/bulletproofing', [BulletProofingController::class, 'index']);
Route::get('/glassmanufacturing', [GlassManufacturingController::class, 'index']);
Route::get('/aluminummanufacturing', [AluminumManufacturingController::class, 'index']);
Route::get('/glassprocessing', [GlassProcessingController::class, 'index']);
Route::get('/gentrade', [GenTradeController::class, 'index']);
Route::get('/catalog', [CatalogController::class, 'show']);

// Product Pages
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'logon']);
Route::get('/logout', [UserController::class, 'logout']);

// Register Page
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'signup']);
Route::get('/confirmation/{token}', [UserController::class, 'confirmation']);

// Dashboard Pages
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/consumer', [ConsumerController::class, 'index']);
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
Route::get('/ticketing', [OrderController::class, 'ticketing']);

// Dashboard - Modules - Approvals
Route::get('/approvals', [UserController::class, 'approvals']);
Route::get('/approvals-view/{id}', [UserController::class, 'approvals_show']);
Route::get('/approvals-download/{id}', [UserController::class, 'approvals_download']);
Route::get('/approvals-approve/{id}', [UserController::class, 'approvals_approve']);
Route::post('/approvals-reject/{id}', [UserController::class, 'approvals_reject']);

// Dashboard - Settings - Users
Route::get('/users', [UserController::class, 'index']);
Route::get('/users-view/{id}', [UserController::class, 'show']);
Route::get('/users-create', [UserController::class, 'create']);
Route::post('/users-store', [UserController::class, 'store']);
Route::get('/users-update/{id}', [UserController::class, 'edit']);
Route::post('/users-update/{id}', [UserController::class, 'update']);
Route::post('/users-destroy/{id}', [UserController::class, 'destroy']);
Route::post('/users-changepic/{id}', [UserController::class, 'changepic']);

// Dashboard - Settings - Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products-view/{id}', [ProductController::class, 'show']);
Route::get('/products-create', [ProductController::class, 'create']);
Route::post('/products-store', [ProductController::class, 'store']);
Route::get('/products-edit/{id}', [ProductController::class, 'edit']);
Route::post('/products-update/{id}', [ProductController::class, 'update']);
Route::post('/products-destroy/{id}', [ProductController::class, 'destroy']);
Route::get('/add-to-cart/{id}', [ProductController::class, 'before_add_to_cart']);
Route::post('/add-to-cart/{id}', [ProductController::class, 'after_add_to_cart']);
Route::get('/cart', [ProductController::class, 'cart']);



Route::get('/product-details', [ProductDetailsController::class, 'index']);

Route::get('/get_quotation', [UserProfileController::class, 'get_quotation']);
Route::get('/process_order', [UserProfileController::class, 'process_order']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/order-summary', [OrderSummaryController::class, 'index']);
//Route::get('/product-details', [ProductDetailsController::class, 'index']);
