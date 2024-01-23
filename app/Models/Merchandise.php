<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merchandise extends Model
{
    use HasFactory;
   

    protected $fillable = ['title', 'user_id', 'province', 'stock', 'description', 'price', 'phone', 'website', 'email', 'video', 'images', 'status'];


    protected $casts = [
        'images' => 'array',
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
