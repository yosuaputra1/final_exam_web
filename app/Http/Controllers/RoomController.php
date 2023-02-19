<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Show all rooms
     */
    public function showAll() {
        return view('admin.rooms', [
            'rooms' => Room::paginate(10),
            'room_types' => RoomType::all()
        ]);
    }

    public function create(Request $request) {
        $type_name = $request->input('room-type');
        $type_id = RoomType::where('name', $type_name)->first()->id;

        $room = new Room;
        $room->name = $request->input('room-number');
        $room->room_type_id = $type_id;
        $room->save();

        return redirect()->route('admin-get-rooms');
    }
}
