<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\AdminController;

Route::get('/', [PortofolioController::class, 'index']);

Route::get('/admin', function () {
    return view('admin_portofolio');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/portofolio', [AdminController::class, 'portofolio'])->name('admin.portofolio');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store']);
    Route::get('/admin/portofolio/{id}/edit', [AdminController::class, 'edit']);
    Route::patch('/admin/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/portofolio/{id}', [AdminController::class, 'destroy']);
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/admin/profile/create', [AdminController::class, 'createSkill'])->name('admin.createSkill');
    Route::post('/admin/profile/store', [AdminController::class, 'storeSkill'])->name('admin.storeSkill');
    Route::delete('/admin/profile/{id}', [AdminController::class, 'destroySkill'])->name('admin.destroySkill');
});

require __DIR__ . '/auth.php';
