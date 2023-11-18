<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class EventRegistration extends Model
{
    use HasFactory, HasUuids, AsSource, Filterable;
    
    protected $table = 'event_registrations';
    
    protected $fillable = [
        'user_id',
        'event_id',
        'transaction_id',
        'status',
        'created_at',
        'updated_at'
    ];
    
    protected array $allowedSorts = [
        'user_id',
        'event_id',
        'transaction_id',
        'status',
        'created_at',
        'updated_at'
    ];
    
    protected array $allowedFilters = [
        'user_id',
        'event_id',
        'transaction_id',
        'status',
        'created_at',
        'updated_at'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
    
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transactions::class);
    }
}
