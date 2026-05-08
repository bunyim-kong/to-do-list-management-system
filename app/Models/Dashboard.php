<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $fillable = [
        'title',
        'description',
        'total_tasks',
        'completed_tasks',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}