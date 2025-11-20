<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers() {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => Customers::paginate(10)
        ]);
    }
}
