<?php

namespace App\Http\Controllers;

use App\Models\DomicileCharge;
use Illuminate\Http\Request;

class DomicileChargeController extends Controller
{
    public function domicileCharge(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => DomicileCharge::paginate(10)
        ]);
    }
}
