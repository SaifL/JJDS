<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_of_Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'date',
        'comment',
        'morning_Med',
        'afternoon_Med',
        'night_Med',
        'prescription',
        'breakfast',
        'lunch',
        'dinner',
    ];
    //! ^ OH BROTHER WHOEVER WROTE THIS IS DUMB
}
