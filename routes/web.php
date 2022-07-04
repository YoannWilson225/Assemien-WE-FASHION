<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Frontend\ViewController;
   

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


Route::get('/', [ViewController::class, 'index']);
Route::get('category', [ViewController::class, 'category']);
Route::get('view_category/{slug}', [ViewController::class, 'viewcategory']);
Route::get('category/{cate_slug}/{art_slug}', [ViewController::class, 'articleview']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [FrontendController::class, 'index']);

    Route::get('categories', [CategoryController::class, 'index']);

    Route::get('add-category', [CategoryController::class, 'add']);

    Route::post('insert-category',[CategoryController::class, 'insert']);

    Route::get('edit-category/{id}',[CategoryController::class, 'edit']);

    Route::put('update-category/{id}', [CategoryController::class, 'update']);

    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('articles', [ArticleController::class, 'index']);

    Route::get('add-articles', [ArticleController::class, 'add']);

    Route::post('insert-articles', [ArticleController::class, 'insert']);

    Route::get('edit-article/{id}', [ArticleController::class, 'edit']);

    Route::put('update-article/{id}', [ArticleController::class, 'update']);

    Route::get('delete-article/{id}', [ArticleController::class, 'destroy']);
    });


    // Route::get('produicts', [articleController::class, 'index']) -> name('articles.index');

