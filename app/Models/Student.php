<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'coverImage',
        'profilePicture',
        'bio',
        'age',
        'residential_address',
        'postal_address',
        'cellphoneNumber',
        'next_of_kin_fullName',
        'next_of_kin_cellphoneNumber',
        'activities',
        'studentLevel',
        'gender'
    ];

    protected $casts = [
        'activities' => 'array'
    ];

}
