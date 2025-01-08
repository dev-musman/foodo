<?php

namespace App\Http\Controllers\Site;

use App\Models\Page;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function show($slug = '/')
    {
        $page = Page::where(function ($query) use ($slug) {
            $query->where('slug', $slug)
                ->orWhere('slug', '/' . $slug);
        })->where('status', 'published')->first();

        if (!$page) {
            abort(404);
        }

        $viewPath = $page->view_path;
        if (!view()->exists($viewPath)) {
            abort(404);
        }

        return view($viewPath, compact('page'));
    }
}
