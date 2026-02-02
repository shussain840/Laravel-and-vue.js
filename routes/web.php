<?php

use App\Http\Controllers\CalculaterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CalculaterController::class, 'index'])->name('home');
Route::post('/', [CalculaterController::class, 'calculate'])->name('home.calculate');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post');
Route::get('/addpost', [PostController::class, 'create'])->name('addposts');
Route::post('/addpost', [PostController::class, 'store'])->name('storeposts');
Route::get('/editpost/{id}', [PostController::class, 'edit'])->name('editposts');
Route::post('/updatepost/{id}', [PostController::class, 'update'])->name('updateposts');
Route::get('/deletepost/{id}', [PostController::class, 'destroy'])->name('deletepost');

