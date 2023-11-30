<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'amount',
        'trip_id'
    ];

    // each expense belongs to one trip
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

}
