<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'schools';

    protected $fillable = [
        'name',
        'banner',
        'drupal_uuid',
    ];
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'school', 'id');
    }
}
