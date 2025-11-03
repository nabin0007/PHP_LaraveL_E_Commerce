<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'parent_id',
        'is_dropdown',
    ];

    // 🔁 Relationship: a menu can have submenus
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // 🔁 Relationship: a submenu belongs to a parent menu
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
