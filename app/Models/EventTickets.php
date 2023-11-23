<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class EventTickets extends Model
{
    use HasFactory, HasUuids, AsSource, Filterable;

    protected $fillable = [
        'name', 
        'user_id', 
        'event_id', 
        'ticket_number', 
        'email', 
        'event_reg_id'
    ]; 
    
    protected array $allowedSorts = [
        'name', 
        'user_id', 
        'event_id', 
        'ticket_number', 
        'email', 
        'event_reg_id', 
        'created_at', 
        'updated_at'
    ]; 
    
    protected array $allowedFilters =  [
        'name', 
        'ticket_number', 
        'email', 
        'event_reg_id',   
    ];
    
    public function eventRegistration(): BelongsTo{
        return $this->belongsTo(EventRegistration::class); 
    }
    
    public function user():BelongsTo{
        return $this->belongsTo(User::class); 
    }
    
}
