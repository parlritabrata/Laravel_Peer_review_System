<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id', 'course_name', 'course_code', 'student', 'status', 'enrollment_date'
    ];
}
