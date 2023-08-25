<?php

use App\Http\Controllers\CarouselImageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryMenuController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ModalImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);

    //categories
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    //post
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    //pages
    Route::get('pages', [PageController::class, 'index'])->name('pages.index');
    Route::get('pages/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('pages', [PageController::class, 'store'])->name('pages.store');
    Route::get('pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
    Route::get('pages/{page}', [PageController::class, 'show'])->name('pages.show');
    Route::put('pages/{page}', [PageController::class, 'update'])->name('pages.update');
    Route::delete('pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');

    //carousel-image
    Route::get('carousel-images', [CarouselImageController::class, 'index'])->name('carousel-images.index');
    Route::get('carousel-images/create', [CarouselImageController::class, 'create'])->name('carousel-images.create');
    Route::post('carousel-images', [CarouselImageController::class, 'store'])->name('carousel-images.store');
    Route::get('carousel-images/{carouselImage}/edit', [CarouselImageController::class, 'edit'])->name('carousel-images.edit');
    // Route::get('carousel-images/{carouselImage}', [CarouselImageController::class, 'show'])->name('carousel-images.show');
    Route::put('carousel-images/{carouselImage}', [CarouselImageController::class, 'update'])->name('carousel-images.update');
    Route::delete('carousel-images/{carouselImage}', [CarouselImageController::class, 'destroy'])->name('carousel-images.destroy');

    //modal-images
    Route::get('modal-images', [ModalImageController::class, 'index'])->name('modal-images.index');
    Route::get('modal-images/create', [ModalImageController::class, 'create'])->name('modal-images.create');
    Route::post('modal-images', [ModalImageController::class, 'store'])->name('modal-images.store');
    Route::get('modal-images/{modalImage}/edit', [ModalImageController::class, 'edit'])->name('modal-images.edit');
    // Route::get('modal-images/{modalImage}', [ModalImageController::class, 'show'])->name('modal-images.show');
    Route::put('modal-images/{modalImage}', [ModalImageController::class, 'update'])->name('modal-images.update');
    Route::delete('modal-images/{modalImage}', [ModalImageController::class, 'destroy'])->name('modal-images.destroy');

    
    //partners
    Route::get('partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('partners/create', [PartnerController::class, 'create'])->name('partners.create');
    Route::post('partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::get('partners/{partner}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
    // Route::get('partners/{partner}', [PartnerController::class, 'show'])->name('partners.show');
    Route::put('partners/{partner}', [PartnerController::class, 'update'])->name('partners.update');
    Route::delete('partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');


    //category menu
    Route::get('category-menu', [CategoryMenuController::class, 'index'])->name('category-menu.index');
    Route::post('category-menu', [CategoryMenuController::class, 'store'])->name('category-menu.store');
    Route::get('category-menu/{categoryMenu}', [CategoryMenuController::class, 'edit'])->name('category-menu.edit');
    Route::put('category-menu/{categoryMenu}', [CategoryMenuController::class, 'update'])->name('category-menu.update');

    Route::put('category-menus/sort', [CategoryMenuController::class, 'sort'])->name('category-menu.sort');
    Route::delete('category-menus/remove-item', [CategoryMenuController::class, 'removeItem'])->name('category-menu.remove-item');

    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
    Route::get('map', function () {
        return view('pages.maps');
    })->name('map');
    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');
    Route::get('table-list', function () {
        return view('pages.tables');
    })->name('table');
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
