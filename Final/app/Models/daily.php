<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daily extends Model
{
    use HasFactory;

    protected $fillable = [
        'daily_id',
        'patient_id',
        'morning_med',
        'afternoon_med',
        'night_med',
        'breakfast',
        'lunch',
        'dinner',
    ];
}
