<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Traits\HasDataTables;

class USerController extends Controller
{
    use HasDataTables;
    public function index(Request $request)
    {

        if (request()->ajax()) {
            $query = User::with('roles.permissions')->get();
            return $this->dataTable(
                $query,
                'users',
                function ($dataTable) {
                    $dataTable
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
                        ->rawColumns(['roles', 'role_permissions']);
                }
            );
        }


        return view('admin.users.index');
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('roles'));
    }

    public function store(CreateUserRequest $request)
    {
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

    public function update(UpdateUserRequest $request, User $user)
    {
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
