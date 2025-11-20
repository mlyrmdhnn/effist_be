<?php

namespace App\Http\Controllers;

use App\Models\InvoiceMba;
use Illuminate\Http\Request;

class InvoiceMbaController extends Controller
{
    public function invoiceMba() {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => InvoiceMba::paginate(10)
        ]);
    }
}
