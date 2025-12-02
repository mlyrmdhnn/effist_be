<?php

namespace App\Http\Controllers;

use App\Models\Extention;
use Illuminate\Http\Request;

class ExtentionController extends Controller
{
    public function extention(Request $req) {

        $search = $req->search;

        $query = Extention::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('building', 'LIKE', "%$search%")
              ->orWhere('ext_no', 'LIKE', "%$search%")
              ->orWhere('status', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $search])
        ]);
    }
}
