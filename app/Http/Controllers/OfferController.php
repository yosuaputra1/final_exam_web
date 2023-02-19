<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    //
    public function show() {
        return view('admin.offers');
    }

    public function create(Request $request) {
        $title = $request->input('offer-title');
        $description = $request->input('offer-description');
        $filename = 'offers/' . $request->file('offer-image')->getClientOriginalName();
        Storage::disk('public')->put($filename, file_get_contents($request->file('offer-image')));

        $offers = new Offer;
        $offers->title = $title;
        $offers->image = $filename;
        $offers->description = $description;
        $offers->save();

        return redirect()->route('admin-offers')->with('message', 'Offer successfully added');
    }
}
