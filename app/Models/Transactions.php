<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Screen\AsSource;

class Transactions extends Model
{
    use HasFactory, HasUuids, AsSource;

    protected $fillable = [
        'user_id',
        'student_id',
        'payplan_id',
        'payment_id',
        'amount_in_cents',
        'currency',
        'status',
        'yoco_charge_id',
        'yoco_payment_id',
        'yoco_livemode',
        'card_brand',
        'masked_card',
        'fingerprint',
        'exp_month',
        'exp_year',
        'invoice_id',
        'name'

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
