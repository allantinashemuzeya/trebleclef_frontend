<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;

class Event extends Model
{
    use HasFactory, HasUuids, AsSource;

    protected $fillable = [
        'drupal_uuid',
        'title',
        'sub_title',
        'start_date',
        'end_date',
        'event_description',
        'event_banner',
        'venue',
        'venue_address',
        'media',
        'event_payment',
    ];

    protected $casts = [
        'media' => 'array',
        'event_payment' => 'array',
    ];
    
    public function eventRegistrations(): HasMany{
        return $this->hasMany(EventRegistration::class); 
    }
    
    public function tickets(): HasMany{
        return $this->hasMany(EventTickets::class); 
    }

}
