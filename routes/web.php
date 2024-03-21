<?php

use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\CarouselImageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryMenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ModalImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostDocumentController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamTypeController;
use App\Http\Controllers\UserController;
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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('pages/{page}', [PageController::class, 'show'])->name('pages.show');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('about-us', [FrontendController::class, 'about'])->name('about-us');

Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact-us.store');


Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);

    //categories
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    //post
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('posts/search', [PostController::class, 'search'])->name('posts.search');
    Route::post('posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    //post document delete
    // Route::get('post-documents/{postDocument}/delete', [DocumentControlle::class, 'destroy'])->name('post-documents.destroy');

    //pages
    Route::get('pages', [PageController::class, 'index'])->name('pages.index');
    Route::get('pages/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('pages', [PageController::class, 'store'])->name('pages.store');
    Route::get('pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
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



    //category menu
    Route::get('category-menu', [CategoryMenuController::class, 'index'])->name('category-menu.index');
    Route::post('category-menu', [CategoryMenuController::class, 'store'])->name('category-menu.store');
    Route::get('category-menu/{categoryMenu}/edit', [CategoryMenuController::class, 'edit'])->name('category-menu.edit');
    Route::put('category-menu/{categoryMenu}', [CategoryMenuController::class, 'update'])->name('category-menu.update');
    Route::put('category-menus/sort', [CategoryMenuController::class, 'sort'])->name('category-menu.sort');
    Route::delete('category-menus/remove-item', [CategoryMenuController::class, 'removeItem'])->name('category-menu.remove-item');

    //profile
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    //user
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/register', [UserController::class, 'register'])->name('users.register');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('users/{user}/change-password', [UserController::class, 'changePassword'])->name('users.changePassword');
    Route::post('users/{user}/change-password', [UserController::class, 'changePasswordUpdate'])->name('users.changePasswordUpdate');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    //site settings
    Route::get('app-settings', [AppSettingController::class, 'index'])->name('app-settings.index');
    Route::put('app-settings', [AppSettingController::class, 'store'])->name('app-settings.store');

    //contact-us-list
    Route::get('contact-us', [ContactController::class, 'index'])->name('contact-us.index');
    Route::delete('contact-us/{contact}', [ContactController::class, 'destroy'])->name('contact-us.destroy');

    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('logs');
});
