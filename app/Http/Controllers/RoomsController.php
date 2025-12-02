<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function rooms(Request $req) {

        $search = $req->search;

        $query = Rooms::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('status_room', 'LIKE', "%$search%")
              ->orWhere('building', 'LIKE', "%$search%")
              ->orWhere('name', 'LIKE', "%$search%")
              ->orWhere('type', 'LIKE', "%$search%")
              ->orWhere('type', 'price', "%$search%")
              ->orWhere('work_station', 'LIKE', "%$search%");
        });

        return response()->json([
            'data' => $query->paginate(10)->appends(['search' => $query])
        ]);
    }
}
