<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function create(){
        $trips = Trip::all();
        return view('tracker', ['trips' => $trips]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name'=>'required | max:255',
            'description'=>'nullable',
            'people'=>'nullable'
        ]);

        // create a new trip
        $newTrip = Trip::create($data);

        return redirect('/tracker');
    }

    public function view(Trip $trip){
        // $trip = Trip::find($tripId);
        // $expenses = $trip->expenses;
        return view('trip-details', ['trip' => $trip]);
    }

    public function delete(Trip $trip){
        $trip->delete();
        return redirect('/tracker');
    }

    public function edit(Trip $trip, Request $request)
    {
        $data = $request->validate([
            'name'=>'required | max:255',
            'description'=>'nullable',
            'people'=>'nullable'
        ]);

        // update trip details
        $trip->update($data);

        return redirect('/tracker');
    }

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
}
