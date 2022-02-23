<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('app.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::post('comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::delete('comment/destroy', [CommentController::class, 'destroy'])->name('comment.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/categoria', [CategoryController::class, 'index'])->name('categoria.index');
Route::get('/categoria/{id}', [CategoryController::class, 'show'])->name('categoria.show');


Route::get('/about', function() {
    return view('about');
})->name('about');