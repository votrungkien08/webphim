<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
