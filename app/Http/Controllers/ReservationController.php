<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    //
    public function showAll() {
        return view('admin.reservations', [
           'reservations' => Reservation::paginate(10),
        ]);
    }

    public function store(Request $request) {

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $type_name = $request->input('type-name');
        $type_id = RoomType::where('name', $type_name)->first()->id;
        $room_name = Room::where('room_type_id', $type_id)->first()->name;
        $check_in = Carbon::parse($request->input('check-in'))->format('Y-m-d');
        $check_out = Carbon::parse($request->input('check-out'))->format('Y-m-d');
        $total_rooms = $request->input('total-rooms');
        $total_price = $request->input('total-price');
        $user_id = Auth::id();

        $reservation = New Reservation;
        $reservation->room_name = $room_name;
        $reservation->check_in = $check_in;
        $reservation->check_out = $check_out;
        $reservation->total_rooms = $total_rooms;
        $reservation->total_price = $total_price;
        $reservation->user_id = $user_id;
        $reservation->save();

        return redirect()->route('room-details', $type_name)->with('message', 'Your reservation successfully saved');
    }
}
