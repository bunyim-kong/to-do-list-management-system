<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $fillable =
    [
       'title',
       'description',
       'priorty',
       'due_date',
       'satus',
        
    ];

    public function users ()
    {
        return $this->hasMany(user::class);
    }
}
