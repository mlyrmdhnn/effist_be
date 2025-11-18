<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function coba(Request $request) {
        return response()->json([
            'testing' => Testing::all(),
        ],201);
    }
}
