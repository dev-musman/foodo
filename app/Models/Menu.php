<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;


class Menu extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'menu_type_id',
        'week',
        'day',
        'price',
        'description',
        'image',
    ];

    public function menuType()
    {
        return $this->belongsTo(MenuType::class);
    }

    public const WEEKS = [
        '1',
        '2',
        '3',
        '4'
    ];

    public const DAYS = [
        'Mon' => 'Mon',
        'Tue' => 'Tue',
        'Wed' => 'Wed',
        'Thu' => 'Thu',
        'Fri' => 'Fri',
        'Sat' => 'Sat',
        'Sun' => 'Sun'
    ];

    public static function getDays()
    {
        return self::DAYS;
    }

    public static function getWeeks()
    {
        return self::WEEKS;
    }

    public static function isMenuAdded($menuTypeId, $week, $day)
    {
        return self::where('menu_type_id', $menuTypeId)
            ->where('week', $week)
            ->where('day', $day)
            ->exists();
    }

    public function deleteImage()
    {
        if ($this->image && Storage::exists(str_replace('/storage/', '', $this->image))) {
            Storage::delete(str_replace('/storage/', '', $this->image));
        }
    }

    // public function getAllowedDays()
    // {
    //     return $this->days_count === 5
    //         ? ['mon' => 'Mon', 'tue' => 'Tue', 'wed' => 'Wed', 'thu' => 'Thu', 'fri' => 'Fri']
    //         : ['mon' => 'Mon', 'tue' => 'Tue', 'wed' => 'Wed', 'thu' => 'Thu', 'fri' => 'Fri', 'sat' => 'Sat', 'sun' => 'Sun'];
    // }

    public function mealPlans()
    {
        return $this->hasMany(MealPlan::class);
    }

    protected static function booted()
    {
        static::deleting(function ($menu) {
            $menu->deleted_by = auth()->id();
            $menu->save();
        });
    }
}
