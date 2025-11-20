<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ExtentionController;
use App\Http\Controllers\MaExampleController;
use App\Http\Controllers\DoaExampleController;
use App\Http\Controllers\InvoiceMbaController;
use App\Http\Controllers\InvoiceSoaController;
use App\Http\Controllers\InvoiceVoaController;
use App\Http\Controllers\MbaExampleController;
use App\Http\Controllers\SoaExampleController;
use App\Http\Controllers\VoaExampleController;
use App\Http\Controllers\MeetingRoomController;
use App\Http\Controllers\SourceInquiryController;
use App\Http\Controllers\DomicileChargeController;
use App\Http\Controllers\InquiryExampleController;
use App\Http\Controllers\AdditionalServicesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\InvoiceChargerSlipController;
use App\Http\Controllers\InvoiceDoaController;

Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/testing', [TestingController::class, 'coba']);

    // dashboard
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/user', [UserController::class, 'userInfo']);

    // inquiry
    Route::get('/inquiry', [InquiryExampleController::class, 'inquiry']);

    // agreement
    Route::get('/soa', [SoaExampleController::class, 'soa']);
    Route::get('/voa', [VoaExampleController::class, 'voa']);
    Route::get('/mba', [MbaExampleController::class, 'mba']);
    Route::get('/ma', [MaExampleController::class, 'ma']);
    Route::get('/doa',[DoaExampleController::class, 'doa']);

    // master data
    Route::get('/building', [BuildingController::class, 'building']);
    Route::get('/rooms', [RoomsController::class, 'rooms']);
    Route::get('/additional_service', [AdditionalServicesController::class, 'additionalServices']);
    Route::get('/extention', [ExtentionController::class, 'extention']);
    Route::get('/meeting_room', [MeetingRoomController::class, 'meetingRoom']);
    Route::get('/phones', [PhonesController::class, 'phones']);
    Route::get('/source_inquiry', [SourceInquiryController::class, 'sourceInquiry']);
    Route::get('/domicile_charge', [DomicileChargeController::class, 'domicileCharge']);

    // invoice
    Route::get('/invoice_soa', [InvoiceSoaController::class, 'invoiceSoa']);
    Route::get('/invoice_voa',[InvoiceVoaController::class, 'invoiceVoa']);
    Route::get('/invoice_mba',[InvoiceMbaController::class, 'invoiceMba']);
    Route::get('/invoice_doa', [InvoiceDoaController::class, 'invoiceDoa']);
    Route::get('/invoice_charger_slip', [InvoiceChargerSlipController::class, 'invoiceChargerSlip']);

    //customers
    Route::get('/customers', [CustomersController::class, 'customers']);
});


