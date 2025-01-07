<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use Illuminate\Support\Str;
use App\Models\Page;
use App\Traits\HasDataTables;
use Illuminate\Http\Request;

class PageController extends Controller
{
    use HasDataTables;

    public function index()
    {
        if (request()->ajax()) {
            $query = Page::query();
            return $this->dataTable($query, 'pages');
        }

        return view('admin.pages.index');
    }

    public function create()
    {
        return view('admin.pages.edit');
    }

    public function store(StorePageRequest $request)
    {

        try {
            $data = $request->all();
            if (!$data['slug']) {
                $data['slug'] = Str::slug($data['title']);
            }

            $page = Page::create($data);

            $response['success'] = true;
            $response['message'] = 'Page successfully created.';
            $response['redirect'] = route('admin.pages.index');

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

    public function update(UpdatePageRequest $request, Page $page)
    {
        try {
            $data = $request->all();

            if (!$data['slug']) {
                $data['slug'] = Str::slug($data['title']);
            }

            $page->update($data);

            $response['success'] = true;
            $response['message'] = 'Page successfully updated.';
            $response['redirect'] = route('admin.pages.index');

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

    public function destroy(Request $request, Page $page)
    {

        try {
            $page->delete();

            $response['success'] = true;
            $response['message'] = 'Page successfully deleted.';

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
}
