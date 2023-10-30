<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'drupal_uuid',
        'learningObjectives',
        'overview',
        'banner',
        'subject',
        'tutorial',
        'date',
        'time',
        'supportingDocuments',
    ];

    protected $casts = [
        'tutorial' => 'array',
        'supportingDocuments' => 'array',
    ];

}
