<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminGalleryController;
use App\Http\Controllers\AdminPanel\AdminMessageController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminCommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//***********************HOME PAGE ROUTES ***************************/
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/categoryproducts/{id}/{slug}',[HomeController::class,'categoryproducts'])->name('categoryproducts');
Route::get('/product/{id}',[HomeController::class,'product'])->name('product');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::post('/comment', [HomeController::class, 'comment'])->name('comment');
Route::get('/logoutuser',[HomeController::class,'logoutuser'])->name('logoutuser');
//***********************HOME PAGE SEARCHBAR ROUTE ***************************/
Route::post('/searchbarshow',[HomeController::class,'searchbarshow'])->name('searchbarshow');


//***********************ADMIN PANEL ROUTES ***************************************/
Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {;
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
     //***********************ADMIN SETTINGS ROUTES ****************************************************************
    Route::get('/settings',[AdminHomeController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminHomeController::class, 'settingsUpdate'])->name('settings.update');
    //********************************ADMIN CATEGORY ROUTES ****************************************************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });
     //********************************ADMIN PRODUCT ROUTES ****************************************************************
     Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });
 //********************************ADMIN MESSAGE ROUTES ****************************************************************
    Route::prefix('/message')->name('message.')->controller(AdminMessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}',  'show')->name('show');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });
    //********************************ADMIN GALLERY ROUTES ****************************************************************
    Route::prefix('/gallery')->name('gallery.')->controller(AdminGalleryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}',  'show')->name('show');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });
    //********************************ADMIN COMMENT ROUTES ****************************************************************
    Route::prefix('/comment')->name('comment.')->controller(AdminCommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
