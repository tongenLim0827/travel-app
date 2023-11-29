<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('new-expenses');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required | min:7',
            'amount' => 'required'
        ]);

        $expense = Expense::create($attributes);

        return redirect('/tracker/{{trip-name}}');
    }
}
