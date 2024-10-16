<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'transaction_title',
        'description',
        'status',
        'total_amount',
        'transaction_number'
    ];
}
