<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class RaffleTicket extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $table = 'raffle_tickets';

    protected $fillable = [
        'user_id',
        'raffle_id',
        'ticket_number',
        'status',
        'created_at',
        'updated_at'
    ];

    protected array $allowedSorts = [
        'ticket_number',
        'status',
        'created_at',
        'updated_at'
    ];

    protected array $allowedFilters = [
        'ticket_number',
        'status',
        'created_at',
        'updated_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
