<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Traits\HasDataTables;
use App\Helpers\{
    LogActivity,
    Common
};

class PageController extends Controller
{
    use HasDataTables;

    public function index()
    {
        if (request()->ajax()) {
            $query = Page::latest();
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
        $data = $request->all();
        if (!$data['slug']) {
            $data['slug'] = Str::slug($data['title']);
        }

        $page = Page::create($data);

        if ($page) {
            LogActivity::addToLog('page', 'insert', $page, null);
        }
        return response()->json([
            'success' => true,
            'message' => 'Page successfully created.',
            'redirect' => route('admin.pages.index')
        ]);
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->all();

        if (!$data['slug']) {
            $data['slug'] = Str::slug($data['title']);
        }

        $changes_exist = Common::get_changes($page, $data);
        if ($changes_exist) {
            LogActivity::addToLog('page', 'update', null, $changes_exist);
            $page->update($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Page successfully updated.',
            'redirect' => route('admin.pages.index')
        ]);
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return response()->json([
            'success' => true,
            'message' => 'Page successfully deleted.'
        ]);
    }
}
