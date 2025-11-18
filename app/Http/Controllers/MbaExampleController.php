<?php

namespace App\Http\Controllers;

use App\Models\MbaExample;
use Illuminate\Http\Request;

class MbaExampleController extends Controller
{
    public function mba() {
        return response()->json([
            'data' => MbaExample::paginate(10)
        ],201);
    }
}
