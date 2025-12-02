<?php

namespace App\Http\Controllers;

use App\Models\MbaExample;
use Illuminate\Http\Request;

class MbaExampleController extends Controller
{
    public function mba(Request $req) {

        $search = $req->search;

        $query = MbaExample::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('customer', 'LIKE', "%$search%")
              ->orWhere('refer_number', 'LIKE', "%$search%")
              ->orWhere('status_mba', 'LIKE', "%$search%");
        });

        return response()->json([
            'data' => $query->paginate(10)->appends(['search' => $query])
        ],201);
    }
}
