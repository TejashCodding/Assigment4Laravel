<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('log.index');
Route::post('/', [UserController::class, 'store'])->name('log.index');

Route::get('/reg', [UserController::class, 'regindex'])->name('reg.index');
Route::post('/reg', [UserController::class, 'regstore'])->name('reg.index');

Route::get('/admin', [UserController::class, 'admin'])->name('admin');
Route::get('/logout', [UserController::class, 'Logout'])->name('Logout');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/postshow/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/postedit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/postedit/{id}', [PostController::class, 'update'])->name('post.edit');
Route::get('/post/{id}', [PostController::class, 'destroy'])->name('delete.post');


// home 
Route::get('/home', [PostController::class, 'home'])->name('home')->middleware('auth');
Route::get('/viewProfile/{id}', [PostController::class, 'viewprofile'])->name('viewprofile');
