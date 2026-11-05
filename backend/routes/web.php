<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\DB;


Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return 'Kết nối MySQL thành công: ' . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return 'Lỗi: ' . $e->getMessage();
    }
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('/news', 'admin.news')->name('news');
    Route::view('/products', 'admin.products')->name('products');
    Route::view('/videos', 'admin.video')->name('videos');
    Route::redirect('/main', '/admin');
});
