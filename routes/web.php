<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'create'])->name('post#home');
Route::get('create', [PostController::class, 'create'])->name('post#createPage');
Route::post('postCreate', [PostController::class,'postCreate'])->name('post#postCreate');
Route::get('postDelete/{id}', [PostController::class, 'postDelete'])->name('post#delete');
Route::get('postDetails/{id}', [PostController::class, 'postDetails'])->name('post#details');
Route::get('postEdit/{id}', [PostController::class, 'postEdit'])->name('post#edit');
Route::post('postEdit/{id}', [PostController::class, 'postEditData'])->name('post#editData');
