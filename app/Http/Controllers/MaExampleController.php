<?php

namespace App\Http\Controllers;

use App\Models\MaExample;
use Illuminate\Http\Request;

class MaExampleController extends Controller
{
    public function ma() {
        return response()->json([
            'data' => MaExample::all()
        ],201);
    }
}
