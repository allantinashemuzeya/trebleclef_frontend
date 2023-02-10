<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'school', 'id');
    }
}
