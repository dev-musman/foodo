<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Mail\OrderCreated;
use App\Models\Customer;
use App\Models\MealPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function createOrder(CreateOrderRequest $request)
    {
        $customer = Customer::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'company' => $request->company,
                'phone' => $request->phone,
                'password' => '12345678'
            ]
        );

        if ($customer) {
            $mealPlan = MealPlan::create([
                'customer_id' => $customer->id,
                'menu_type_id' => $request->menu_type_id,
                'persons' => $request->persons,
                'company' => $request->company,
                'phone' => $request->phone,
                'delivery_address' => $request->delivery_address,
                'start_date' => $request->start_date,
            ]);

            if ($request->filled("menuItems")) {
                foreach ($request->menuItems as $menuTypeId => $menuItems) {
                    foreach ($menuItems as $menuItem) {
                        $mealPlan->menuItems()->create([
                            'meal_plan_id' => $mealPlan->id,
                            'menu_id' => $menuItem['id'],
                            'week' => $menuItem['week'],
                            'day' => $menuItem['day'],
                        ]);
                    }
                }
            }

            // Send email to the customer
            Mail::to($customer->email)->send(new OrderCreated($customer, $mealPlan));
            // Optionally, send an email to the admin as well
            Mail::to("devtms@ipscloud.com")->send(new OrderCreated($customer, $mealPlan));

            return response()->json([
                'success' => true,
                'message' => 'Meal plan created successfully!',
            ], 201);
        }
    }


    public function show()
{
    $mealPlan = MealPlan::with([
        'menuItems.menu' => function ($query) {
            $query->select('id' ,'name');
        }
    ])->findOrFail(7);

    return view('test', compact('mealPlan'));
}



}
