<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuType;
use App\Traits\HasDataTables;
use Illuminate\Http\Request;

class MenuTypesController extends Controller
{
    use HasDataTables;

    public function index()
    {
        if (request()->ajax()) {
            $query = MenuType::query();
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
        try {
            $data = $request->all();

            $menuType = MenuType::create($data);

            $response['success'] = true;
            $response['message'] = 'Menu Type successfully created.';
            $response['redirect'] = route('admin.menu-types.index');

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

    public function edit(MenuType $menuType)
    {
        return view('admin.menu_types.edit', compact('menuType'));
    }

    public function update(Request $request, MenuType $menuType)
    {
        $request->validate([
            'type' => 'required|unique:menu_types,type,' . $menuType->id,
        ]);
        try {
            $data = $request->all();


            $menuType->update($data);

            $response['success'] = true;
            $response['message'] = 'Menu Type successfully updated.';
            $response['redirect'] = route('admin.menu-types.index');

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
