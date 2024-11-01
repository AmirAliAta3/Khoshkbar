<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'Home'])->name('Home');
Route::get('/admin/addproduct', [HomeController::class,'AddProduct'])->name('AddProduct');
Route::get('/admin/editproduct', [HomeController::class,'EditProduct'])->name('EditProduct');
Route::get('/admin/deleteproduct', [HomeController::class,'DeleteProduct'])->name('DeleteProduct');
Route::get('/admin/category', [HomeController::class,'CategoryAdmin'])->name('CategoryAdmin');
Route::get('/admin/user', [HomeController::class,'UsersAdmin'])->name('UsersAdmin');

Route::get('/admin', function() {return view('Admin.Index');})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('admin', function (){return view('Admin.Index');})->name('admin');
});
