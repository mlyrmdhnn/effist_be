<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
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