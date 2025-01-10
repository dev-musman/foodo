<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OrderStatusUpdated;
use App\Models\MealPlan;
use App\Traits\HasDataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Helpers\{
    LogActivity,
    Common
};

class OrderController extends Controller
{
    use HasDataTables;
    public function index()
    {
        if (request()->ajax()) {
            $query = MealPlan::with('menuType')->latest();

            return $this->dataTable($query, 'orders', function ($dataTable) {
                $dataTable->addColumn('type', function ($plan) {
                    return $plan->menuType->type ?? '';
                });
                $dataTable->addColumn('name', function ($plan) {
                    return $plan->user->name ?? '';
                });
            });
        }


        return view('admin.orders.index');
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,in-progress,completed,cancelled',
        ]);

        $order = MealPlan::findOrFail($id);
        $data = $request->all();

        $changes_exist = Common::get_changes($order, $data);
        if ($changes_exist) {
            LogActivity::addToLog('Order status #(' . $order->id . ')', 'update', null, $changes_exist);
            $order->status = $data['status'];
            $order->save();

            $user = $order->user;

            if ($user && $data['status'] != "pending" ) {
                try {
                    Mail::to($user->email)->send(new OrderStatusUpdated($order, 'user'));
                    // Mail::to($adminEmail)->send(new OrderStatusUpdated($order, 'admin'));
                    Log::info('Email send: ');
                } catch (\Exception $e) {
                    Log::error('Email failed to send: ' . $e->getMessage());
                    return response()->json(['error' => 'Email could not be sent'], 500);
                }
            }
        }
        // if ($user && $user->email) {
        //     Mail::to($user->email)->send(new OrderStatusUpdated($order, 'user'));
        // }

        // $adminEmail = config('mail.admin_email');
        // if ($adminEmail) {
        //     // Mail::to($adminEmail)->send(new OrderStatusUpdated($order, 'admin'));
        // }

        return response()->json([
            'success' => true,
            'message' => 'Order status updated successfully and emails sent!',
        ]);
    }

    public function edit(MealPlan $mealPlan)
    {
        return view('admin.orders.edit', compact('mealPlan'));
    }

    public function update(Request $request, MealPlan $mealPlan)
    {
        $request->validate([
            'persons' => 'required|integer',
            'phone' => 'required',
            'company' => 'required|string',
            'start_date' => 'required|date',
            'delivery_address' => 'required|string',
        ]);

        $data = $request->all();

        $changes_exist = Common::get_changes($mealPlan, $data);
        if ($changes_exist) {
            LogActivity::addToLog('Order edit #(' . $mealPlan->id . ')', 'update', null, $changes_exist);
            $mealPlan->update($data);
        }

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully!',
            'redirect' => route('admin.orders'),
        ]);
    }


    public function destroy(MealPlan $mealPlan)
    {
        $mealPlan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Menu successfully deleted.',
        ]);
    }
}
