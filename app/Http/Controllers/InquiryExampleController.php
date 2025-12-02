<?php

namespace App\Http\Controllers;

use App\Models\InquiryExample;
use Illuminate\Http\Request;

class InquiryExampleController extends Controller
{
    public function inquiry(Request $req) {
        $search = $req->search;

        $query = InquiryExample::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('product_type', 'LIKE', "%$search%")
              ->orWhere('building', 'LIKE', "%$search%")
              ->orWhere('customer', 'LIKE', "%$search%");
        });

        return response()->json([
            'data' => $query->paginate(10)->appends(['search' => $search])
        ],201);
    }
}
