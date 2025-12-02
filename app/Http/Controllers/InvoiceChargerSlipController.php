<?php

namespace App\Http\Controllers;

use App\Models\InvoiceChargerSlip;
use Illuminate\Http\Request;

class InvoiceChargerSlipController extends Controller
{
    public function invoiceChargerSlip(Request $req) {


        $search = $req->search;

        $query = invoiceChargerSlip::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('invoice_no', 'LIKE', "%$search%")
              ->orWhere('customer', 'LIKE', "%$search%")
              ->orWhere('status', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $search])
        ]);
    }
}
