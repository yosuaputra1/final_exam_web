<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    //
    public function show() {
        return view('admin.news');
    }

    public function create(Request $request) {
        $title = $request->input('news-title');
        $content = $request->input('news-content');
        $filename = 'news/' . $request->file('news-image')->getClientOriginalName();
        Storage::disk('public')->put($filename, file_get_contents($request->file('news-image')));

        $news = new News;
        $news->title = $title;
        $news->image = $filename;
        $news->content = $content;
        $news->save();

        return redirect()->route('admin-news')->with('message', 'News successfully added');
    }
}
