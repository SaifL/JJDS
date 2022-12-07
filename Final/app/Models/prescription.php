<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'prescription_id',
        'date',
        'doctor_id',
        'patient_id',
        'morning_med',
        'afternoon_med',
        'night_med',
        'comment',
    ];
}
