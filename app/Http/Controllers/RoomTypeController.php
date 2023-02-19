<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    //
    public function showAll() {
        return view('admin.edit-price');
    }

    public function showDetails($name) {
        $detail = RoomType::where('name', $name)->first();
        return view('room-details', [
            'room' => $detail
        ]);
    }

    public function updatePrice(Request $request, $id) {

        $roomType = RoomType::find($id);
        $roomType->price = $request->input('room-price');
        $roomType->save();
        return redirect()->route('admin-room-types-update-get');
    }
}
