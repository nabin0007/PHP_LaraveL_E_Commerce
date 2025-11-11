<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'banner_image',
        'link',
        'banner_type', // ✅ Added
        'active'
    ];

    // Scope for active sections
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    // Scope for banner type
    public function scopeHorizontal($query)
    {
        return $query->where('banner_type', 'horizontal');
    }

    public function scopeVertical($query)
    {
        return $query->where('banner_type', 'vertical');
    }
}
