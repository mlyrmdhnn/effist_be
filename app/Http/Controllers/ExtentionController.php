<?php

namespace App\Http\Controllers;

use App\Models\Extention;
use Illuminate\Http\Request;

class ExtentionController extends Controller
{
    public function extention(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => Extention::paginate(10)
        ]);
    }
}
