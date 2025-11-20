<?php

namespace App\Http\Controllers;

use App\Models\MeetingRoom;
use Illuminate\Http\Request;

class MeetingRoomController extends Controller
{
    public function meetingRoom(Request $request) {
        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => MeetingRoom::paginate(10)
        ]);
    }
}
