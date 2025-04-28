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
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\CatalogueController;


// Home Pages
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/inquiry-store', [HomeController::class, 'addInquiry']);
Route::get('/faqs', [HomeController::class, 'FAQs']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/add-to-cart/{id}', [ProductController::class, 'before_add_to_cart']);
Route::post('/add-to-cart/{id}', [ProductController::class, 'after_add_to_cart']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::get('/get-quotation-bulletproofing', [QuotationController::class, 'quotationBulletProofing']);
Route::get('/get-quotation-glassprocessing', [QuotationController::class, 'quotationGlassProcessing']);
Route::post('/create-quotation', [QuotationController::class, 'store']);
Route::get('/show-quotation/{reference}', [QuotationController::class, 'showQuotation']);
Route::post('/user-send-message', [QuotationController::class, 'userSendMessage']);
Route::post('/cancel-quotation', [QuotationController::class, 'cancel']);
Route::post('/approve-quotation', [QuotationController::class, 'approve']);
Route::post('/quotation-to-cart', [QuotationController::class, 'quotationToCart']);
Route::post('/remove-cart-item/{id}', [ProductController::class, 'remove']);

// Product Pages
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/bulletproofing', [BulletProofingController::class, 'index']);
Route::get('/glassmanufacturing', [GlassManufacturingController::class, 'index']);
Route::get('/aluminummanufacturing', [AluminumManufacturingController::class, 'index']);
Route::get('/glassprocessing', [GlassProcessingController::class, 'index']);
Route::get('/gentrade', [GenTradeController::class, 'index']);
Route::get('/catalog', [CatalogController::class, 'show']);
Route::get('/shop', [HomeController::class, 'shop']);

// User Authentication
//Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'logon']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/logout', [UserController::class, 'logout']);


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

// Dashboard - Modules - Quotations
Route::get('/quotations', [QuotationController::class, 'index']);
Route::get('/quotations-view/{id}', [QuotationController::class, 'show']);
Route::get('/quotations-create', [QuotationController::class, 'create']);
Route::post('/quotations-store', [QuotationController::class, 'store']);
Route::get('/quotations-edit/{id}', [QuotationController::class, 'edit']);
Route::put('/quotations-update/{id}', [QuotationController::class, 'update']);
Route::post('/quotations-destroy/{id}', [QuotationController::class, 'destroy']);
Route::post('/send-message', [QuotationController::class, 'sendMessage']);

// Dashboard - Modules - Approvals
Route::get('/approvals', [UserController::class, 'approvals']);
Route::get('/approvals-view/{id}', [UserController::class, 'approvals_show']);
Route::get('/approvals-download/{id}', [UserController::class, 'approvals_download']);
Route::get('/approvals-approve/{id}', [UserController::class, 'approvals_approve']);
Route::post('/approvals-reject/{id}', [UserController::class, 'approvals_reject']);

// Dashboard - Modules - Inquiries
Route::get('/inquiries', [UserController::class, 'approvals']);
Route::get('/inquiries-view/{id}', [UserController::class, 'approvals_show']);

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
Route::put('/products-update/{id}', [ProductController::class, 'update']);
Route::post('/products-destroy/{id}', [ProductController::class, 'destroy']);

// Dashboard - Settings - Product Categories
Route::get('/product-categories', [ProductCategoryController::class, 'index']);
Route::get('/product-categories-view/{id}', [ProductCategoryController::class, 'show']);
Route::get('/product-categories-create', [ProductCategoryController::class, 'create']);
Route::post('/product-categories-store', [ProductCategoryController::class, 'store']);
Route::get('/product-categories-edit/{id}', [ProductCategoryController::class, 'edit']);
Route::put('/product-categories-update/{id}', [ProductCategoryController::class, 'update']);
Route::post('/product-categories-destroy/{id}', [ProductCategoryController::class, 'destroy']);

// Dashboard - Settings - Product Variants
Route::get('/product-variants', [ProductVariantController::class, 'index']);
Route::get('/product-variants-view/{id}', [ProductVariantController::class, 'show']);
Route::get('/product-variants-create', [ProductVariantController::class, 'create']);
Route::post('/product-variants-store', [ProductVariantController::class, 'store']);
Route::get('/product-variants-edit/{id}', [ProductVariantController::class, 'edit']);
Route::put('/product-variants-update/{id}', [ProductVariantController::class, 'update']);
Route::post('/product-variants-destroy/{id}', [ProductVariantController::class, 'destroy']);

// Dashboard - Settings - Catalogue
Route::get('/catalogue', [CatalogueController::class, 'index']);
Route::get('/catalogue-view/{id}', [CatalogueController::class, 'show']);
Route::get('/catalogue-create', [CatalogueController::class, 'create']);
Route::post('/catalogue-store', [CatalogueController::class, 'store']);
Route::get('/catalogue-edit/{id}', [CatalogueController::class, 'edit']);
Route::put('/catalogue-update/{id}', [CatalogueController::class, 'update']);
Route::post('/catalogue-destroy/{id}', [CatalogueController::class, 'destroy']);


Route::get('/product-details', [ProductDetailsController::class, 'index']);
Route::get('/user_messages', [UserProfileController::class, 'user_messages']);
Route::get('/messages', [UserProfileController::class, 'messages']);
Route::get('/process_order', [UserProfileController::class, 'process_order']);
Route::post('/checkout', [ProductController::class, 'checkout']);
Route::get('/order-status/{reference}', [ProductController::class, 'order_status']);
Route::get('/order-summary', [OrderSummaryController::class, 'index']);
Route::get('/order_status', [ProductController::class, 'order_status']);
Route::get('/hidden_store', [UserProfileController::class, 'hidden_store']);
Route::get('/main_quote', [UserProfileController::class, 'main_quote']);
Route::get('/quote_msg', [UserProfileController::class, 'quote_msg']);
Route::get('/quotation_bulletproof', [UserProfileController::class, 'quotation_bulletproof']);
Route::get('/quotation_glasspro', [UserProfileController::class, 'quotation_glasspro']);
//Route::get('/product-details', [ProductDetailsController::class, 'index']);
