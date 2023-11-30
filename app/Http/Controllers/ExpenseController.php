<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Trip;

class ExpenseController extends Controller
{
    public function create($trip)
    {
        // dd($trip);
        return view('new-expenses', ['trip' => $trip]);
    }

    public function store($trip)
    {
        $attributes = request()->validate([
            'trip_id' => 'required|exists:trips,id', // relate to a particular trip
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'amount' => 'required'
        ]);

        $expense = Expense::create($attributes);
        return redirect("/tracker/{$trip}/details");
    }

    public function view(Request $request, $trip)
    {
        return view('expense-details');
    }

    public function delete($trip, $expense, )
    {
        $findExpenses = Expense::find($expense);
        $findExpenses->delete();

        return redirect("/tracker/{$trip}/details");
    }

}
