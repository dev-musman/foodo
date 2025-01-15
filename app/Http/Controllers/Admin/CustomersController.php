<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Support\Facades\Hash;
use App\Traits\HasDataTables;
use App\Helpers\{
    LogActivity,
    Common
};
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    use HasDataTables;
    public function index(Request $request)
    {


        if (request()->ajax()) {

            $trash = $request->get("trash");
            $q = Customer::latest();
            $query = $trash == "true" ? $q->onlyTrashed() : $q;

            return $this->dataTable(
                $query,
                'customers'
            );
        }


        return view('admin.customers.index');
    }

    public function create()
    {
        return view('admin.customers.edit');
    }

    public function store(CreateCustomerRequest $request)
    {
        $user = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        LogActivity::addToLog('customer', 'insert', $user, null);

        return response()->json([
            'success' => true,
            'message' => 'customer successfully created.',
            'redirect' => route('admin.customers.index')
        ]);
    }

    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $data = $request->only(['name', 'email', 'comapny', 'phone']);
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $changes_exist = Common::get_changes($customer, $data);
        if ($changes_exist) {
            LogActivity::addToLog('customer', 'update', null, $changes_exist);
            $customer->update($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'customer successfully updated.',
            'redirect' => route('admin.customers.index')
        ]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json([
            'success' => true,
            'message' => 'Customer successfully deleted.'
        ]);
    }
}
