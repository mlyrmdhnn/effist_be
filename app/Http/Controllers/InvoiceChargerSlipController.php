<?php

namespace App\Http\Controllers;

use App\Models\InvoiceChargerSlip;
use Illuminate\Http\Request;

class InvoiceChargerSlipController extends Controller
{
    public function invoiceChargerSlip() {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => InvoiceChargerSlip::paginate(10)
        ]);
    }
}
