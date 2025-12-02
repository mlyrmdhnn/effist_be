<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(Request $req) {

        $search = $req->search;

        $query = Customers::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%")
              ->orWhere('company_name', 'LIKE', "%$search%")
              ->orWhere('service', 'LIKE', "%$search%")
              ->orWhere('status', 'LIKE', "%$search%")
              ->orWhere('phone', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $search])
        ]);
    }
}
