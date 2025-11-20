<?php

namespace App\Http\Controllers;

use App\Models\Phones;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function phones(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => Phones::paginate(10)
        ]);
    }
}
