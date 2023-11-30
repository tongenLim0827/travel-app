<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\Redis;
use App\Models\User;


class TripController extends Controller
{
    public function create(Request $request){

        // $trips = Trip::all();
        // return view('tracker', ['trips' => $trips]);

        // To get all the trips associated to the user
        // Retrieve authenticated user
        $user = auth()->user();

        // Query trips associated with the user
        $userTripsQuery = $user->trips();

        // Get the filtered trips
        $trips = $userTripsQuery->get();

        // Pass the filtered trips to the view
        return view('tracker', ['trips' => $trips]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'user_id'=> 'required|exists:users,id',
            'name'=>'required | max:255',
            'description'=>'nullable',
            'people'=>'nullable',
        ]);

        // create a new trip
        $newTrip = Trip::create($data);

        return redirect('/tracker');
    }

    public function view($trip){
        // dd($trip);

        // To get all the expenses associated to the trip
        // Retrieve the Trip model by its ID
        $trip = Trip::find($trip);

        if (!$trip) {
            // Trip not found
            // Handle the case where the trip with the given ID doesn't exist
            return redirect('/'); // Redirect to home or handle as needed
        }

        // Get all expenses associated with the trip
        $expensesTripQuery = $trip->expenses();
        $expenses = $expensesTripQuery->get();

        // Pass the trip and its expenses to the view
        return view('trip-details', ['trip' => $trip, 'expenses' => $expenses]);
    }

    public function delete(Trip $trip){
        $trip->delete();
        return redirect('/tracker');
    }

    // WORKING TEMPORARILY
    public function edit(Trip $trip, Request $request)
    {
        // $request->validate([
        //     'name'=>'required|max:255',
        //     'description'=>'nullable',
        //     'people'=>'nullable'
        // ]);

        $data = $request->only(['name', 'description', 'people']);

        // update trip details
        $trip->update($data);

        return redirect('/tracker');
    }
}
