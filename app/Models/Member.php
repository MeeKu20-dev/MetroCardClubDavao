<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'alternative_name',
        'civil_status',
        'present_address',
        'permanent_address',
        'birthday',
        'birth_place',
        'mobile_number',
        'nationality',
        'email',
        'souce_of_income',
        'business_name',
        'business_nature',
        'employer_name',
        'work_nature',
        'politcal_exposed',
        'emergency_name',
        'emergency_relationship',
        'emergency_contact',
    ];
}
