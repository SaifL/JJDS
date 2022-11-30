<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    use HasFactory;

    protected $fillable = [
        'roster_id',
        'date',
        'supervisor',
        'doctor',
        'caregiver1',
        'caregiver2',
        'caregiver3',
        'caregiver4',
    ];
}
