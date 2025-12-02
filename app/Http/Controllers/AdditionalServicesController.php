<?php

namespace App\Http\Controllers;

use App\Models\AdditionalServices;
use Illuminate\Http\Request;

class AdditionalServicesController extends Controller
{
    public function additionalServices(Request $req) {

        $search = $req->search;

        $query = AdditionalServices::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('service_name', 'LIKE', "%$search%")
              ->orWhere('price', 'LIKE', "%$search%")
              ->orWhere('remark', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $query])
        ],201);
    }
}
