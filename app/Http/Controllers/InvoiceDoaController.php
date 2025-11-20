<?php

namespace App\Http\Controllers;

use App\Models\InvoiceDoa;
use Illuminate\Http\Request;

class InvoiceDoaController extends Controller
{
    public function invoiceDoa() {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => InvoiceDoa::paginate(10)
        ]);
    }
}
