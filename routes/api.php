<?php

use App\Http\Controllers\DoaExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\MaExampleController;
use App\Http\Controllers\MbaExampleController;
use App\Http\Controllers\SoaExampleController;
use App\Http\Controllers\VoaExampleController;
use App\Http\Controllers\InquiryExampleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testing', [TestingController::class, 'coba']);
Route::get('/inquiry', [InquiryExampleController::class, 'inquiry']);
Route::get('/soa', [SoaExampleController::class, 'soa']);
Route::get('/voa', [VoaExampleController::class, 'voa']);
Route::get('/mba', [MbaExampleController::class, 'mba']);
Route::get('/ma', [MaExampleController::class, 'ma']);
Route::get('/doa',[DoaExampleController::class, 'doa']);