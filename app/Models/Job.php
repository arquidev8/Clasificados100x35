<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id', 
        'title',    
        'province', 
        'company_name', 
        'location', 
        'job_description', 
        'employment_sector', 
        'employment_type', 
        'salary', 
        'email', 
        'phone', 
        'website',
        'application_instructions', 
        'job_requirements', 
        'images', 
        'video'];

    protected $casts = [
        'images' => 'array',
    
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
  

}
