<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PageController;
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
	Route::get('categories',[CategoryController::class,'index'])->name('categories.index');
	Route::post('categories',[CategoryController::class,'store'])->name('categories.store');
	Route::get('categories/{category}',[CategoryController::class,'edit'])->name('categories.edit');
	Route::put('categories/{category}',[CategoryController::class,'update'])->name('categories.update');
	Route::delete('categories/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');

	//post
	Route::get('posts',[PostController::class,'index'])->name('posts.index');
	Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
	Route::post('posts',[PostController::class,'store'])->name('posts.store');
	Route::get('posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
	Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
	Route::put('posts/{post}',[PostController::class,'update'])->name('posts.update');
	Route::delete('posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');


	
	//pages
	Route::get('pages',[PageController::class,'index'])->name('pages.index');
	Route::get('pages/create',[PageController::class,'create'])->name('pages.create');
	Route::post('pages',[PageController::class,'store'])->name('pages.store');
	Route::get('pages/{page}/edit',[PageController::class,'edit'])->name('pages.edit');
	Route::get('pages/{page}',[PageController::class,'show'])->name('pages.show');
	Route::put('pages/{page}',[PageController::class,'update'])->name('pages.update');
	Route::delete('pages/{page}',[PageController::class,'destroy'])->name('pages.destroy');

	
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

