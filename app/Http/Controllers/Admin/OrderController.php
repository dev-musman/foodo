<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MealPlan;
use App\Models\MealPlanDetail;
use App\Models\MenuType;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createMealPlan(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'menus' => 'required|array',
            'menus.*' => 'exists:menus,id',
            'menu_type_id' => 'exists:menu_types,id',
            'persons' => 'required|integer|min:1',
            'delivery_address' => 'required|string|max:500',
            'start_date' => 'required|date|after_or_equal:today',
        ]);

        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'company' => $request->company,
            ]
        );

        $mealPlan = MealPlan::create([
            'user_id' => $user->id,
            'persons' => $request->persons,
            'delivery_address' => $request->delivery_address,
            'start_date' => $request->start_date,
        ]);

        $menu_type = MenuType::whereId($request->menu_type_id)->first();

        if ($menu_type->type == "Custom") {
            foreach ($request->menus as $menuId) {
                MealPlanDetail::create([
                    'meal_plan_id' => $mealPlan->id,
                    'menu_id' => $menuId,
                    'day' => $request->day,
                    'week' => $request->week,
                ]);
            }
        }

        return response()->json([
            'message' => 'Meal plan created successfully!',
            'meal_plan' => $mealPlan->load('menuDetails.menu'),
        ], 201);
    }
}
