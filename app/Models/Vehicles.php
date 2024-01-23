<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicles extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'title',
        'seller_type',
        'stock',
        'registered_city',
        'engine_capacity',
        'body_type',
        'condition',
        'model_year',
        'exterior_color',
        'car_features',
        'description',
        'price',
        'phone',
        'website',
        'email',
        'video',
        'province',
        'images'
        
    ];

    protected $casts = [
        'images' => 'array',
        'car_features' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
  

  
}
