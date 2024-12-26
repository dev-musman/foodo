<?php

namespace App\Http\Controllers\Site;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show($slug = '/')
    {
        $page = Page::where('slug', $slug)->orWhere('slug', '/'.$slug)->first();
        if (is_null($page) || $page->status != 'published') {
            return abort(404);
        }
        return view('site.' . ($slug == "/" ? "index" : $slug), compact('page'));
    }
}
