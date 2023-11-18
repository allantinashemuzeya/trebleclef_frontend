<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Ruffle extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'user_id',
        'full_name_surname',
        'phone_number',
        'school',
        'grade',
        'status',
        'number_of_tickets'
    ];

    protected array $allowedSorts = [
        'full_name_surname',
        'school',
        'grade',
        'status',
        'number_of_tickets',
        'created_at',
        'updated_at'
    ];

    protected array $allowedFilters = [
        'full_name_surname',
        'school',
        'grade',
        'status',
        'created_at',
        'updated_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function raffleTickets(): HasMany
    {
        return $this->hasMany(RaffleTicket::class);
    }

}
