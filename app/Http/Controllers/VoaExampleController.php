<?php

namespace App\Http\Controllers;

use App\Models\VoaExample;
use Illuminate\Http\Request;

class VoaExampleController extends Controller
{
    public function voa() {
        return response()->json([
            'data' => VoaExample::paginate(10)
        ],201);
    }
}
