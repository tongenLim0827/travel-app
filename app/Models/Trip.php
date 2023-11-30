<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'people',
      'user_id'
    ];

    // each trip belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // a trip can have multiple expenses
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function totalExpenses()
    {
        return $this->expenses->sum('amount');
    }

}
