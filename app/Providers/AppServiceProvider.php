<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Support\Facades\View;
use App\Models\Menu;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share menus and categories with navbar partial
        //View::composer('partials.navbar', function ($view) {
        //    $menus = Menu::all();
        //    $categories = Category::all();

        //    $view->with(compact('menus', 'categories'));
        //});
    }
}
