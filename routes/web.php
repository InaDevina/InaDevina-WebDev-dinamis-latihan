<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::get('/', [LaptopController::class, 'index'])->name('list-laptop');
Route::get('/form-laptops', [LaptopController::class, 'create'])->name('add-laptop');
Route::post('/save-laptop', [LaptopController::class, 'store'])->name('save-laptop');
Route::post('/delete-laptop', [LaptopController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-laptop/{laptop}', [LaptopController::class, 'edit'])->name('edit-laptop');
Route::post('/update-laptop', [LaptopController::class, 'update'])->name('update-laptop');