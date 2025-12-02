<?php

namespace App\Http\Controllers;

use App\Models\MaExample;
use Illuminate\Http\Request;

class MaExampleController extends Controller
{
    public function ma(Request $req) {

        $search = $req->search;

        $query = MaExample::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('customer', 'LIKE', "%$search%")
              ->orWhere('refer_number', 'LIKE', "%$search%")
              ->orWhere('membership', 'LIKE', "%$search%")
              ->orWhere('created_by', 'LIKE', "%$search%")
              ->orWhere('status_ma', 'LIKE', "%$search%");
        });

        return response()->json([
            'data' => $query->paginate(10)->appends(['search' => $query])
        ],201);
    }
}
