<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'user_id'
    ];

    protected $casts = [
        'teachers' => 'array',  // Automatically cast teachers as an array
    ];

    // Course.php
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
 
    
}
