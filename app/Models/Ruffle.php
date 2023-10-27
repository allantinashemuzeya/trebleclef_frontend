<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruffle extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'full_name_surname',
        'phone_number',
        'school',
        'grade',
        'status'
    ];
}
