<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealPlanDetail extends Model
{
    protected $fillable = [
        'meal_plan_id',
        'menu_id',
    ];

    public function mealPlan()
    {
        return $this->belongsTo(MealPlan::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
