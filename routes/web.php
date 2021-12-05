<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CompanyController;

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
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Blog
Route::get('/news', [BlogController::class, 'index'])->name('blog');
Route::get('/news/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/tags/{tag:slug}', [TagController::class, 'show'])->name('tags.show');

// Search Post
Route::get('/search', [SearchController::class, 'post'])->name('search.posts');

// Portfolio
Route::get('/projects', [PageController::class, 'portfolio'])->name('portfolio');
// Services
Route::get('/services', [PageController::class, 'service'])->name('service');
Route::get('/services/{service:slug}', [ServiceController::class, 'show'])->name('service.show');
// Company
Route::get('/company/{company:slug}', [CompanyController::class, 'show'])->name('company.show');
Route::get('/structure', [CompanyController::class, 'structure'])->name('structure');
Route::get('/values', [CompanyController::class, 'values'])->name('values');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
