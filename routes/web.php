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

// Fallback storage route for shared hosting / cPanel when storage symlink is missing or restricted
Route::get('/storage/{path}', function (string $path) {
    if (str_contains($path, '..')) {
        abort(404);
    }

    $filePath = storage_path('app/public/' . $path);

    if (!file_exists($filePath) || !is_file($filePath)) {
        abort(404);
    }

    return response()->file($filePath, [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET, HEAD, OPTIONS',
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->where('path', '.*');

// Helper route to create storage link on cPanel without SSH
Route::get('/artisan/storage-link', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return response('<pre>Storage link command executed: ' . e(\Illuminate\Support\Facades\Artisan::output()) . '</pre>');
    } catch (\Throwable $e) {
        return response('<pre>Error creating storage link: ' . e($e->getMessage()) . '</pre>', 500);
    }
});

