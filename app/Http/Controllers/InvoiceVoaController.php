<?php

namespace App\Http\Controllers;

use App\Models\InvoiceVoa;
use Illuminate\Http\Request;

class InvoiceVoaController extends Controller
{
    public function invoiceVoa(Request $req) {


        $search = $req->search;

        $query = InvoiceVoa::query();

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
