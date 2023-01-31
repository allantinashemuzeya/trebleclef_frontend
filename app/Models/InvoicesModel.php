<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesModel extends Model
{
    use HasFactory;

//    public mixed $User;
    /**
     * @var mixed|string
     */
//    public mixed $InvoiceNumber;
//    public mixed $PayPlan;
    protected $table = 'invoices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'InvoiceNumber',
        'UserId',
        'PayPlan',
    ];

}
