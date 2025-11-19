<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms() {
        return response()->json([
            'data' => Rooms::paginate(10)
        ]);
    }
}
