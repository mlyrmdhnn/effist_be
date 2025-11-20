<?php

namespace App\Http\Controllers;

use App\Models\SourceInquiry;
use Illuminate\Http\Request;

class SourceInquiryController extends Controller
{
    public function SourceInquiry(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => SourceInquiry::paginate(10)
        ]);
    }
}
