<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'sub_into',
        'banner',
        'slug',
        'overview',
        'student_levels',
        'drupal_uuid',
    ];

    protected $casts = [
        'student_levels' => 'array',
    ];

    public function studentLevels(): BelongsToMany
    {
        return $this->belongsToMany(StudentLevel::class);
    }
}
