<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approvals extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_id',
        'role_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'date_of_birth',
        'family_code',
        'emergency_contact',
        'rel_emergency',
    ];
}
