<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Traits\HasDataTables;

class PermissionController extends Controller
{
    use HasDataTables;
    public function index()
    {
        if (request()->ajax()) {
            $query = Permission::query();
            return $this->dataTable($query, 'permissions');
        }

        return view('admin.permissions.index');
    }

    public function create()
    {
        return view('admin.permissions.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);

        $permission = Permission::create($request->only('name'));

        $response['success'] = true;
        $response['message'] = 'Permission successfully created.';
        $response['redirect'] = route('admin.permissions.index');

        return response()->json($response);
    }

    public function show(string $id)
    {
        //
    }


    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update($request->only('name'));

        $response['success'] = true;
        $response['message'] = 'Permission successfully updated.';
        $response['redirect'] = route('admin.permissions.index');

        return response()->json($response);
    }

    public function destroy(Request $request, Permission $permission)
    {
        try {
            $permission->delete();

            $response['success'] = true;
            $response['message'] = 'Permission successfully deleted.';

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
