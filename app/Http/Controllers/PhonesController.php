<?php

namespace App\Http\Controllers;

use App\Models\Phones;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function phones(Request $req) {

        $search = $req->search;

        $query = Phones::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('building', 'LIKE', "%$search%")
              ->orWhere('phone_no', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $search])
        ]);
    }
}
