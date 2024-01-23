<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'user_id',
        'title',
        'service_type',
        'stock',
        'province',
        'description',
        'price',
        'phone',
        'website',
        'email',
        'video',
        'images'
        
    ];

    protected $casts = [
        'images' => 'array',
    
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
