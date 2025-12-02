<?php

namespace App\Http\Controllers;

use App\Models\InvoiceMba;
use Illuminate\Http\Request;

class InvoiceMbaController extends Controller
{
    public function invoiceMba(Request $req) {

        $search = $req->search;

        $query = InvoiceMba::query();

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
