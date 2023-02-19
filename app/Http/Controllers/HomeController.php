<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Offer;
use App\Models\RoomType;

class HomeController extends Controller
{
    //
    public function index() {
        return view('home', [
            'room_types' => RoomType::all(),
            'list_news' => News::all()->take(3),
            'list_offers' => Offer::all()->take(3)
        ]);
    }
}
