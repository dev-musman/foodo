<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuType;
use App\Traits\HasDataTables;
use Illuminate\Http\Request;
use App\Helpers\{
    LogActivity,
    Common
};


class MenuTypesController extends Controller
{
    use HasDataTables;

    public function index()
    {
        if (request()->ajax()) {
            $query = MenuType::latest();
            return $this->dataTable($query, 'menu-types');
        }

        return view('admin.menu_types.index');
    }

    public function create()
    {
        return view('admin.menu_types.edit');
    }

    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required|unique:menu_types,type',
        ]);

        $data = $request->all();
        $menuType = MenuType::create($data);

        if ($menuType) {
            LogActivity::addToLog('menu-type', 'insert', $menuType, null);
        }

        return response()->json([
            'success' => true,
            'message' => 'Menu Type successfully created.',
            'redirect' => route('admin.menu-types.index'),
        ]);
    }


    public function edit(MenuType $menuType)
    {
        return view('admin.menu_types.edit', compact('menuType'));
    }

    public function update(Request $request, MenuType $menuType)
    {
        $request->validate([
            'type' => 'required|unique:menu_types,type,' . $menuType->id,
        ]);

        $data = $request->all();

        $changes_exist = Common::get_changes($menuType, $data);
        if ($changes_exist) {
            LogActivity::addToLog('menu-type', 'update', null, $changes_exist);
            $menuType->update($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Menu Type successfully updated.',
            'redirect' => route('admin.menu-types.index'),
        ]);
    }

    public function destroy(MenuType $menuType)
    {
        $menuType->delete();

        return response()->json([
            'success' => true,
            'message' => 'Menu type successfully deleted.'
        ]);
    }
}
