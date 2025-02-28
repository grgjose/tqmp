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
<<<<<<< HEAD
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderSummaryController;
use App\Http\Controllers\ProductDetailsController;
=======
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
>>>>>>> dde72e2a0b5ab727ab04faa84f315d7c08bf7652

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
Route::get('/catalog', [CatalogController::class, 'show'])->name('gentrade.catalog');

// Product Pages
Route::get('/login', [UserController::class, 'login'])->name('home.login');
Route::post('/login', [UserController::class, 'logon'])->name('home.signin');
Route::get('/logout', [UserController::class, 'logout'])->name('home.logout');

// Register Page
Route::get('/register', [UserController::class, 'register'])->name('home.register');
Route::post('/register', [UserController::class, 'signup'])->name('home.signup');

//Dashboard Pages
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/consumer', [ConsumerController::class, 'index'])->name('dashboard.consumer');
Route::get('/inventory', [InventoryController::class, 'index'])->name('dashboard.inventory');
Route::get('/order', [OrderController::class, 'index'])->name('dashboard.order');
Route::get('/userprofiles', [UserProfileController::class, 'index'])->name('dashboard.userprofiles');
<<<<<<< HEAD
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/order-summary', [OrderSummaryController::class, 'index']);
Route::get('/product-details', [ProductDetailsController::class, 'index'])->name('product-details');
=======

//TEST
Route::get('/send-email', function() {
    $data = [
        'name' => 'George Jose',
        'message' => 'This is a test email from Tamii mong mahal.'
    ];

    Mail::to('avienachreeze@gmail.com')->send(new MyTestMail($data));

    return 'Email Sent Successfully!';
});
>>>>>>> dde72e2a0b5ab727ab04faa84f315d7c08bf7652
