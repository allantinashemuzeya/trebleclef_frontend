<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory, HasUuids, AsSource, Filterable;
    
    protected $fillable = [
        'drupal_uuid',
        'title',
        'price',
        'description',
        'price_for_parent', 
        'price_for_sibling', 
        'price_for_other', 
        'type'
    ];
    
    protected $allowedFilters = [
        'title',
        'price',
        'description',
        'type'
    ];
    
    protected $allowedSorts = [
        'title',
        'price',
        'type',
        'price_for_parent', 
        'price_for_sibling', 
        'price_for_other', 
    ];
    
}
