<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RealEstateProduct extends Model
{
    use HasFactory;
 
    protected $fillable = ['bathrooms', 'user_id', 'property_type', 'garage', 'property_size', 'garage_size', 'bedrooms', 'year_built', 'seller_type', 'condition', 'purpose', 'land_area', 'property_features', 'colors', 'description', 'price', 'images', 'phone', 'website', 'email', 'video', 'province', 'title', 'stock'];

    protected $casts = [
        'images' => 'array',
        'property_features' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
