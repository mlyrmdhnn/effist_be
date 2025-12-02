<?php

namespace App\Http\Controllers;

use App\Models\DoaExample;
use Illuminate\Http\Request;

class DoaExampleController extends Controller
{

    public function doa(Request $req) {

        $search = $req->search;

        $query = DoaExample::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('office', 'LIKE', "%$search%")
              ->orWhere('status_doa', 'LIKE', "%$search%")
              ->orWhere('created_by', 'LIKE', "%$search%")
              ->orWhere('refer_number', 'LIKE', "%$search%")
              ->orWhere('customer', 'LIKE', "%$search%");
        });

        return response()->json([
            'data' => $query->paginate(10)->appends(['search' => $query])
        ],201);
    }
}
