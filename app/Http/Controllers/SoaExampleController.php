<?php

namespace App\Http\Controllers;

use App\Models\SoaExample;
use Illuminate\Http\Request;

class SoaExampleController extends Controller
{
    public function soa(Request $request) {
        return response()->json([
        'data' => SoaExample::all()
        ],201);
    }
}
