<?php

namespace App\Http\Controllers;

use App\Models\DomicileCharge;
use Illuminate\Http\Request;

class DomicileChargeController extends Controller
{
    public function domicileCharge(Request $req) {

        $search = $req->search;

        $query = DomicileCharge::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%")
              ->orWhere('building', 'LIKE', "%$search%")
              ->orWhere('price', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $search])
        ]);
    }
}
