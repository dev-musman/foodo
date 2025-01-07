<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Traits\HasDataTables;

class RoleController extends Controller
{
    use HasDataTables;

    public function index()
    {

        if (request()->ajax()) {
            $query = Role::with('permissions')->get();
            return $this->dataTable(
                $query,
                'roles',
                function ($dataTable) {
                    $dataTable->addColumn('permissions', function ($role) {
                        return $role->permissions->map(function ($permission) {
                            return '<span class="badge bg-success">' . e($permission->name) . '</span>';
                        })->implode(' ');
                    })->rawColumns(['permissions']);
                }
            );
        }

        return view('admin.roles.index');
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required'
        ]);

        $role = Role::create($request->only('name'));
        $role->permissions()->sync($request->permissions);


        $response['success'] = true;
        $response['message'] = 'Role successfully created.';
        $response['redirect'] = route('admin.roles.index');

        return response()->json($response);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
            'permissions' => 'required'
        ]);

        $role->update($request->only('name'));
        $role->permissions()->sync($request->permissions);


        $response['success'] = true;
        $response['message'] = 'Role successfully updated.';
        $response['redirect'] = route('admin.roles.index');

        return response()->json($response);
    }

    public function destroy(Request $request, Role $role)
    {
        try {
            $role->delete();

            $response['success'] = true;
            $response['message'] = 'Role successfully deleted.';

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
