<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MealPlan;
use App\Models\MealPlanDetail;
use App\Models\MenuType;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'company' => 'required',
            'persons' => 'required|integer|min:1',
            'delivery_address' => 'required|string|max:500',
            'start_date' => 'required|date',
            'menu_type_id' => 'exists:menu_types,id',
        ]);

        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'password' => '12345678'
            ]
        );

        if ($user) {
            // $user->syncRoles(3);
            $mealPlan = MealPlan::create([
                'user_id' => $user->id,
                'menu_type_id' => $request->menu_type_id,
                'persons' => $request->persons,
                'company' => $request->company,
                'phone' => $request->phone,
                'delivery_address' => $request->delivery_address,
                'start_date' => $request->start_date,
            ]);

            // $menu_type = MenuType::whereId($request->menu_type_id)->first();

            // if ($menu_type->type == "Custom") {
            //     foreach ($request->menus as $menuId) {
            //         MealPlanDetail::create([
            //             'meal_plan_id' => $mealPlan->id,
            //             'menu_id' => $menuId,
            //             'day' => $request->day,
            //             'week' => $request->week,
            //         ]);
            //     }
            // }

            return response()->json([
                'success' => true,
                'message' => 'Meal plan created successfully!',
            ], 201);
        }
    }
}
