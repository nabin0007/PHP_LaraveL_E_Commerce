<?php

namespace App\Http\Controllers;

use App\Models\Slider;

class SliderController extends Controller
{
    public function getData()
    {
        $slides = Slider::query()->where('active', true)->orderBy('sort_order')->get();
        return $slides;
    }
}

