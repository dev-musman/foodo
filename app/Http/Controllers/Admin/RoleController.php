<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $roles = Role::with('permissions')->get();
            return DataTables::of($roles)
                ->addColumn('permissions', function ($role) {
                    return $role->permissions->map(function ($permission) {
                        return '<span class="badge bg-success">' . e($permission->name) . '</span>';
                    })->implode(' ');
                })
                ->addColumn('action', function ($role) {
                    return view('admin.inc.table-actions', [
                        'item' => $role,
                        'route' => 'roles'
                    ])->render();
                })
                ->rawColumns(['permissions', 'action'])
                ->make(true);
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
            // 'permissions' => 'array',
            // 'permissions.*' => 'exists:permissions,id',
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
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,id',
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
