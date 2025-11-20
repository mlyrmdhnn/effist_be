<?php

namespace App\Http\Controllers;

use App\Models\InvoiceSoa;
use Illuminate\Http\Request;

class InvoiceSoaController extends Controller
{
    public function invoiceSoa(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => InvoiceSoa::paginate(10)
        ]);
    }
}
