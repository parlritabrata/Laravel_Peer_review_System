<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeerReview extends Model
{

    use HasFactory;

    // protected $table = 'peer_reviews';

    protected $fillable = [
        'course_id',
        'title',
        'instruction',
        'num_reviews',
        'max_score',
        'due_date',
        'type',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    protected $casts = [
        'due_date' => 'datetime',
    ];
}
