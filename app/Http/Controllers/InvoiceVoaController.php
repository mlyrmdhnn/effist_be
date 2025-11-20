<?php

namespace App\Http\Controllers;

use App\Models\InvoiceVoa;
use Illuminate\Http\Request;

class InvoiceVoaController extends Controller
{
    public function invoiceVoa(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => InvoiceVoa::paginate(10)
        ]);
    }
}
