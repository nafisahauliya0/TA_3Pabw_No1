<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', [LaporBanjirController::class, 'index'])->name('lapor.index');
Route::get('/lapor/tambah', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor/simpan', [LaporBanjirController::class, 'store'])->name('lapor.store');