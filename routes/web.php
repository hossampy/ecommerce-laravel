<?php

use App\Http\Controllers\Editor\EditorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Middleware\AdminAuthenticated;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/store', [\App\Http\Controllers\StoreController::class, 'index'])->name('home_page');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin_dashboard');




});
/// admine
Route::middleware(AdminAuthenticated::class)->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);

});
/// editor
Route::middleware(\App\Http\Middleware\EditorAuthenticated::class)->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('/editor/dashboard', [EditorController::class, 'index'])->name('editor_dashboard');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
