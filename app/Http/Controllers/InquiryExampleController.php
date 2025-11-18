<?php

namespace App\Http\Controllers;

use App\Models\InquiryExample;
use Illuminate\Http\Request;

class InquiryExampleController extends Controller
{
    public function inquiry(Request $req) {
        return response()->json([
            'data' => InquiryExample::paginate(10)
        ],201);
    }
}
