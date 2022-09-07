<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\LoginController;

use App\http\controllers\DashboardController;
use App\http\controllers\LandingPageController;

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\salesController;

// use App\Http\Controllers\Admin\RoleController;
// use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TravelController;



Route::get('/', function () {
    return view('pages.landingpage.index');
});


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/register', [LoginController::class,'register'])->name('register');
// Route::get('/admin', [DashboardController::class,'index'])->name('admin');

// Landing page
Route::group(['prefix' => 'landingpage'], function() {
Route::get('/', [LandingPageController::class,'index'])->name('landingpage');
Route::get('/detail-bali', [LandingPageController::class,'detail_bali'])->name('detail-bali');
Route::get('/detail-nusapenida', [LandingPageController::class,'detail_nusapenida'])->name('detail-nusapenida');
Route::get('/checkout', [LandingPageController::class,'checkout'])->name('checkout-index');
Route::get('/success', [LandingPageController::class,'success'])->name('success-index');
});

// ======================ADMIN======
// Route::group(['middleware' => 'role:admin'], function () {

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('admin');
        // Route::get('admin-index/', [DashboardController::class,'index'])->name('admin-index');
        // Route::post('/store', [DashboardController::class,'store'])->name('admindashboard-store');
        // Route::get('/create', [DashboardController::class,'create'])->name('admindashboard-create');
        // Route::delete('/{id}', [DashboardController::class,'destroy'])->name('admindashboard-destroy');
        // Route::put('/{request}', [DashboardController::class,'update'])->name('admindashboard-update');
        // Route::get('request/{request}/edit', [DashboardController::class,'edit'])->name('admindashboard-edit');
        // Route::get('detail',[DashboardController::class,'detail'])->name('admindashboard-detail');

        // =====Data sales
        Route::get('/sales', [App\Http\Controllers\SalesController::class, 'index'])->name('sales');
        // Route::post('/sales-export', [App\Http\Controllers\salesController::class, 'export'])->name('sales-export');
        // Route::get('/sales', [App\Http\Controllers\salesController::class, 'ajax'])->name('ajax-produk');
        // Route::post('/sales-import', [salesController::class, 'import'])->name('produk-import');
        // Route::get('/sales/download-template', [SalesController::class, 'DownloadTemplate'])->name('produk-download-template');
        // =====End Data Sales
    });

    Route::group(['prefix' => 'travel'], function () {
            // =====Data Travel
            Route::get('/', [TravelController::class, 'index'])->name('travel');
            Route::get('/create', [TravelController::class,'create'])->name('travel-create');
            Route::post('/store', [TravelController::class,'store'])->name('travel-store');
            Route::get('/{id}', [TravelController::class,'show'])->name('travel-show');
            Route::delete('/{id}', [TravelController::class,'destroy'])->name('travel-destroy');
            Route::put('/{id}', [TravelController::class,'update'])->name('travel-update');
            Route::get('/travel/{id}/edit', [TravelController::class,'edit'])->name('travel-edit');
            // Route::post('/travel-export', [App\Http\Controllers\salesController::class, 'export'])->name('travel-export');
            // Route::get('/travel', [App\Http\Controllers\salesController::class, 'ajax'])->name('ajax-produk');
            // Route::post('/travel-import', [salesController::class, 'import'])->name('produk-import');
            // Route::get('/travel/download-template', [SalesController::class, 'DownloadTemplate'])->name('produk-download-template');
            // =====End Data Travel
    });

// });
// ======================END ADMIN======

// Route::group(['middleware' => 'level', 'prefix' => 'admin'], function() {
// Route::group(['prefix' => 'admin'], function() {
//     // Route::resource('/', 'admin/DashboardController');

// });


// Route::group(['middleware' => ['auth']], function() {
//     // Route::resource('roles', RoleController::class);
//     Route::resource('saless', salesController::class);



//     // User request
//     Route::group(['prefix' => 'user'], function() {
//         Route::get('/', [UserController::class,'index'])->name('users.index');
//         Route::post('/store', [UserController::class,'store'])->name('users.store');
//         Route::get('/create', [UserController::class,'create'])->name('users.create');
//         Route::get('/show', [UserController::class,'show'])->name('users.show');
//         Route::delete('/{id}', [UserController::class,'destroy'])->name('users.destroy');
//         Route::put('/{request}', [UserController::class,'update'])->name('users.update');
//         Route::get('request/{request}/edit', [UserController::class,'edit'])->name('users.edit');
//         Route::get('/{request}/detail',[UserController::class,'detail'])->name('users.detail');
//     });
//     Route::post('/ajax/user', [UserController::class, 'ajax'])->name('ajax-user');



//     // Roles request
//     Route::group(['prefix' => 'roles'], function() {
//         Route::get('/', [RoleController::class,'index'])->name('roles.index');
//         Route::post('/store', [RoleController::class,'store'])->name('roles.store');
//         Route::get('/create', [RoleController::class,'create'])->name('roles.create');
//         Route::get('/show', [RoleController::class,'show'])->name('roles.show');
//         Route::delete('/{id}', [RoleController::class,'destroy'])->name('roles.destroy');
//         Route::put('/{request}', [RoleController::class,'update'])->name('roles.update');
//         Route::get('request/{request}/edit', [RoleController::class,'edit'])->name('roles.edit');
//         Route::get('/{request}/detail',[RoleController::class,'detail'])->name('roles.detail');
//          // Route::post('/ajax/user', [UserController::class, 'ajax'])->name('ajax-user');
//     });


//     // Travel request
//     Route::group(['prefix' => 'travels'], function() {
//         Route::get('/', [TravelController::class,'index'])->name('travels.index');
//         Route::post('/store', [TravelController::class,'store'])->name('travels.store');
//         Route::get('/create', [TravelController::class,'create'])->name('travels.create');
//         Route::get('/show', [TravelController::class,'show'])->name('travels.show');
//         Route::delete('/{id}', [TravelController::class,'destroy'])->name('travels.destroy');
//         Route::put('/{request}', [TravelController::class,'update'])->name('travels.update');
//         Route::get('request/{request}/edit', [TravelController::class,'edit'])->name('travels.edit');
//         Route::get('/{request}/detail',[TravelController::class,'detail'])->name('travels.detail');
//     });

// });

