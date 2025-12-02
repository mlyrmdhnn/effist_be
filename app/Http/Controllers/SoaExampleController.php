<?php

namespace App\Http\Controllers;

use App\Models\SoaExample;
use Illuminate\Http\Request;

class SoaExampleController extends Controller
{
    public function soa(Request $req) {

        $search = $req->search;

        $query = SoaExample::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('customer', 'LIKE', "%$search%")
              ->orWhere('office', 'LIKE', "%$search%")
              ->orWhere('refer_number', 'LIKE', "%$search%")
              ->orWhere('status_soa', 'LIKE', "%$search%");
        });

        return response()->json([
        'data' => $query->paginate(10)->appends(['search' => $search])
        ],201);
    }
}
