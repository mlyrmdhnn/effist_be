<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function building(Request $request){
        return response()->json([
            'data' => Building::all()
        ]);
    }
}
