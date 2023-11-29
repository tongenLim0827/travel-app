<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Trip;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('new-expenses');
    }

    public function store()
    {
        $attributes = request()->validate([
            // 'trip_id' => 'required|exists:trips,id', // relate to a particular trip
            'name' => 'required',
            'category' => 'required',
            'description' => 'required | min:7',
            'amount' => 'required'
        ]);

        $expense = Expense::create($attributes);

        return redirect('/tracker/{trip}/details');

    }

    // each expense belongs to one trip
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
