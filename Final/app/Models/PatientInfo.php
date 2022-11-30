<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'group_no',
        'family_code',
        'emergency_contact',
        'rel_emergency',
        'admission_date',
    ];
}
