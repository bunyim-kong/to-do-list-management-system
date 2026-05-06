<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function tasks ()
    {
        return $this->beLongsto(task::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id', 'id');
    }
}