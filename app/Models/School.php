<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'schools';

    protected $fillable = [
        'uuid',
        'target_uid',
        'name',
        'location',
        'banner',
        'target_type',
        'target_id',
        'url'
        ];
}
