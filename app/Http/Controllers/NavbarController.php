<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function navbar()
    {

       // $menus = Menu::all();
        $menus = Menu::whereNull('parent_id')->with('children')->get();
        $categories = Category::all();

        return view('home.index', compact('menus', 'categories'));


       // return view('home.index'); // menus & categories are automatically available
    }
}
