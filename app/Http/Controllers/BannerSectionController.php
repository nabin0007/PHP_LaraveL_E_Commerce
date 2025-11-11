<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerSection;

class BannerSectionController extends Controller
{
    /**
     * Get all active featured sections
     */
    public function getData()
    {
        
        $sections = BannerSection::active()->get();

        return $sections; 
    }
}
