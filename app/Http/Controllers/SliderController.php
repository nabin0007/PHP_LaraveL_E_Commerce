<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Helpers\ImageOptimizer;

class SliderController extends Controller
{
    public function getData()
    {
        $slides = Slider::query()->where('active', true)->orderBy('sort_order')->get();
        return $slides;
    }



    public function storeSlider(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $imagePath = ImageOptimizer::optimize($request->file('image'), 'assets/images/slider', 1280, 720);

        $slide = new Slide();
        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle ?? null;
        $slide->image = $imagePath;
        $slide->save();

        return back()->with('success', 'Slide uploaded and optimized!');
    }
}

