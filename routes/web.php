<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('tag/index', [TagController::class, 'index'])->name('tag.index');
Route::get('tag/create', [TagController::class, 'create'])->name('tag.create');
Route::post('tag/store', [TagController::class, 'store'])->name('tag.store');
Route::get('tag/show/{id}', [TagController::class, 'show'])->name('tag.show');
Route::get('tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
Route::put('tag/update/{id}', [TagController::class, 'update'])->name('tag.update');
Route::delete('tag/destroy/{id}', [TagController::class, 'destroy'])->name('tag.destroy');

Route::get('category/index', [TagController::class, 'index'])->name('category.index');
Route::get('category/create', [TagController::class, 'create'])->name('category.create');
Route::post('category/store', [TagController::class, 'store'])->name('category.store');
Route::get('category/show/{id}', [TagController::class, 'show'])->name('category.show');
Route::get('category/edit/{id}', [TagController::class, 'edit'])->name('category.edit');
Route::put('category/update/{id}', [TagController::class, 'update'])->name('category.update');
Route::delete('category/destroy/{id}', [TagController::class, 'destroy'])->name('category.destroy');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
