<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;
use Yajra\DataTables\DataTables;

class PageController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pages = Page::all();
            return DataTables::of($pages)
                ->addColumn('action', function ($page) {
                    return view('admin.inc.table-actions', [
                        'item'  => $page,
                        'route' => 'pages'
                    ])->render();
                })
                ->escapeColumns([])
                ->make(true);
        }

        return view('admin.pages.index');
    }

    public function create()
    {
        return view('admin.pages.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        try {
            $data = $request->all();
            if (!$data['slug']) {
                $data['slug'] = Str::slug($data['title']);
            }

            $page = Page::create($data);

            $response['success'] = true;
            $response['message'] = 'Page successfully created.';
            $response['redirect'] = route('pages.index');

            return response()->json($response);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'request' => $request->type,
                'message' => $exception->getMessage(),
                'line'    => $exception->getLine(),
                'file'    => $exception->getFile()
            ]);
        }
    }


    public function show(string $id)
    {
        //
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        try {
            $data = $request->all();

            if (!$data['slug']) {
                $data['slug'] = Str::slug($data['title']);
            }

            $page->update($data);

            $response['success'] = true;
            $response['message'] = 'Page successfully updated.';
            $response['redirect'] = route('pages.index');

            if ($request->ajax()) {
                return response()->json($response);
            }

            return redirect($response['redirect']);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'request' => $request->type,
                'message' => $exception->getMessage(),
                'line'    => $exception->getLine(),
                'file'    => $exception->getFile()
            ]);
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
