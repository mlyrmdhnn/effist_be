<?php

namespace App\Http\Controllers;

use App\Models\DoaExample;
use Illuminate\Http\Request;

class DoaExampleController extends Controller
{

    public function doa() {
        return response()->json([
            'data' => DoaExample::all()
        ],201);
    }
}
