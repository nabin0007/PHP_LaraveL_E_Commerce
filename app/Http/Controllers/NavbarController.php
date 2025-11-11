<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class NavbarController extends Controller
{
    public function getData()
    {
        $menus = Menu::query()->whereNull('parent_id')->with('children')->get();
        $categories = Category::active()->orderBy('sort_order')->get();

        return [
            'menus' => $menus,
            'categories' => $categories,
        ];
    }
 

}
