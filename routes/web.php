<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article.show');
Route::post('/book', [BookingController::class, 'store'])->name('booking.store');

// Fallback storage route for shared hosting / cPanel when storage symlink is missing
Route::get('/storage/{path}', function (string $path) {
    $basePath = realpath(storage_path('app/public'));
    $filePath = realpath(storage_path('app/public/' . $path));

    if (!$filePath || !$basePath || !str_starts_with($filePath, $basePath) || !is_file($filePath)) {
        abort(404);
    }

    return response()->file($filePath);
})->where('path', '.*');

