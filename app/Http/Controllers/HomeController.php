<?php

namespace App\Http\Controllers;

use App\Models\BannerSection;
use App\Models\Product;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CategoryController;

class HomeController extends Controller
{
    protected $sliderController;
    protected $navbarController;
    protected $categoryController;

    public function __construct(
        SliderController $sliderController,
        NavbarController $navbarController,
        CategoryController $categoryController
    ) {
        $this->sliderController = $sliderController;
        $this->navbarController = $navbarController;
        $this->categoryController = $categoryController;
    }

    public function index()
    {
        // Fetch sliders, menus, and categories
        $slides = $this->sliderController->getData();
        $navbar = $this->navbarController->getData();
        $categories = $this->categoryController->getData();

        // Fetch banners
        $bannerSectionsHorizontal = BannerSection::active()
            ->where('banner_type', 'horizontal')
            ->get();

        $bannerSectionsVertical = BannerSection::active()
            ->where('banner_type', 'vertical')
            ->get();

        // Fetch products with category relationship
        $dailyBestSells = Product::with('category')
            ->where('is_daily_best_sell', true)
            ->limit(8)
            ->get();

        $popularProducts = Product::with('category')
            ->where('is_popular', true)
            ->limit(10)
            ->get();

        // Fetch all products (or daily bestsells)
       // $products = Product::where('status', true)->get();


        // Pass data to view
        return view('home.index', [
            'slides' => $slides,
            'menus' => $navbar['menus'] ?? [],
            'categories' => $categories,
            'bannerSectionsHorizontal' => $bannerSectionsHorizontal,
            'bannerSectionsVertical' => $bannerSectionsVertical,
            'dailyBestSells' => $dailyBestSells,
            'popularProducts' => $popularProducts,
            //'products' => $products,
        ]);
    }
}
