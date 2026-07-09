<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\GerakanController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/dewasa',[ModeController::class,'dewasa'])->name('dewasa');
Route::get('/anak',[ModeController::class,'anak'])->name('anak');
Route::get('/gerakan/{mode}',[GerakanController::class,'index'])->name('gerakan.index');
Route::get('/gerakan/detail/{slug}',[GerakanController::class,'show'])->name('gerakan.detail');