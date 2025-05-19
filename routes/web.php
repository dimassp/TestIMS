<?php

use App\Http\Controllers\InstallmentController;
use Illuminate\Support\Facades\Route;


Route::prefix('instalment')->group(function () {
    Route::get("/", [InstallmentController::class, 'index'])->name('instalment.index');
    Route::post("/", [InstallmentController::class, 'store'])->name('instalment.store');
    Route::get("/add", [InstallmentController::class, 'create'])->name('instalment.create');
    Route::get("/edit/{id}", [InstallmentController::class, 'edit'])->name('instalment.edit');
    Route::post("/update/{id}", [InstallmentController::class, 'update'])->name('instalment.update');
    Route::get("/search", [InstallmentController::class, 'search'])->name('instalment.search');
    Route::get("/search_kontrak", [InstallmentController::class, 'search_kontrak'])->name('instalment.search_kontrak');
});

