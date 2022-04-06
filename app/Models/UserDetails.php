<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = 'user_details';

    protected $fillable = [
        'coverImage',
        'profilePicture',
        'bio',
        'marital_status',
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

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }
}
