<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('posts', PostController::class);

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::post('posts/{post}/publish', [PostController::class, 'publish'])->name('posts.publish');
Route::post('posts/{post}/unpublish', [PostController::class, 'unpublish'])->name('posts.unpublish');

Route::get('/', [PostController::class, 'index']);
