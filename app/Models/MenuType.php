<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{

    protected $fillable = ['type', 'days_count'];

    public static $statuses = [
        'published' => 'Published',
        'draft'     => 'Draft',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

}
