<?php

namespace App\Http\Controllers;

use App\Models\MeetingRoom;
use Illuminate\Http\Request;

class MeetingRoomController extends Controller
{
    public function meetingRoom(Request $req) {

        $search = $req->search;

        $query = MeetingRoom::query();

        $query->when($search, function ($q) use ($search) {
            $q->where('building', 'LIKE', "%$search%")
              ->orWhere('meeting_room', 'LIKE', "%$search%")
              ->orWhere('type', 'LIKE', "%$search%")
              ->orWhere('price', 'LIKE', "%$search%");
        });

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $query->paginate(10)->appends(['search' => $search])
        ]);
    }
}
