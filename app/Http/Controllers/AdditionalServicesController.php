<?php

namespace App\Http\Controllers;

use App\Models\AdditionalServices;
use Illuminate\Http\Request;

class AdditionalServicesController extends Controller
{
    public function additionalServices(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => AdditionalServices::paginate(10)
        ],201);
    }
}
