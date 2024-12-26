<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class USerController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $users = User::with('roles.permissions')->get();

            return DataTables::of($users)
                ->addColumn('roles', function ($user) {
                    return $user->roles->map(function ($role) {
                        return '<span class="badge bg-success">' . e($role->name) . '</span>';
                    })->implode(' ');
                })
                ->addColumn('role_permissions', function ($user) {
                    $permissions = $user->roles->flatMap(function ($role) {
                        return $role->permissions;
                    })->unique('id');

                    return $permissions->map(function ($permission) {
                        return '<span class="badge bg-primary">' . e($permission->name) . '</span>';
                    })->implode(' ');
                })
                ->addColumn('action', function ($user) {
                    return view('admin.inc.table-actions', [
                        'item' => $user,
                        'route' => 'users',
                    ])->render();
                })
                ->escapeColumns([])
                ->make(true);
        }


        return view('admin.users.index');
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'roles' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->syncRoles($request->roles);

        $response['success'] = true;
        $response['message'] = 'user successfully created.';
        $response['redirect'] = route('admin.users.index');

        return response()->json($response);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'roles' => 'required'
        ]);


        $data = $request->only(['name', 'email']);
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        $user->syncRoles($request->roles);

        $response['success'] = true;
        $response['message'] = 'user successfully updated.';
        $response['redirect'] = route('admin.users.index');

        return response()->json($response);
    }

    public function destroy(Request $request, User $user)
    {
        try {
            $user->delete();

            $response['success'] = true;
            $response['message'] = 'User successfully deleted.';

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
