<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'role_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'date_of_birth',
    ];
}
