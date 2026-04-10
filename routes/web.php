<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RegistationController;
use App\Http\Controllers\superAdminController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\CaptchaController;
// use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //Front route
    Route::get('/', [dashboardController::class, 'index']);

    Route::post('/inquiry-submit', [DashboardController::class, 'inquirystore'])->name('inquiry.submit');
    Route::get('/thank-you', [DashboardController::class, 'thankyou'])->name('thank-you');
  
    Route::get('/captcha-image', [CaptchaController::class, 'image'])->name('captcha.image');  
    
    Route::get('login', [dashboardController::class, 'login'])->name('login');
    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/user', [usersController::class, 'user'])->name('user');
        Route::get('/admin/dashboard',[dashboardController::class, 'admin'])->name('/admin/dashboard');
        Route::get('/superAdmin', [superAdminController::class, 'superAdmin'])->name('superAdmin');  

        Route::get('/admin/dashboard', [adminController::class, 'admin'])->name('admin/dashboard');

        Route::resource('category', CategoryController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('property', PropertyController::class);
        Route::prefix('backend')->group(function () {
        // Route::get('home', [adminController::class, 'index'])->name('home');
        });


    });