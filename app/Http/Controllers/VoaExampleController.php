<?php

namespace App\Http\Controllers;

use App\Models\VoaExample;
use Illuminate\Http\Request;

class VoaExampleController extends Controller
{
    public function voa(Request $req) {

        $search = $req->search;

        $query = VoaExample::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('customer', 'LIKE', "%$search%")
              ->orWhere('service', 'LIKE', "%$search%")
              ->orWhere('refer_number', 'LIKE', "%$search%")
              ->orWhere('status_voa', 'LIKE', "%$search%");
        });

        return response()->json([
            'data' => $query->paginate(10)->appends(['search' => $query])
        ],201);
    }
}
