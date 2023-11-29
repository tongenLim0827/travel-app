<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        return view('trip-details', ['trip' => $trip]);
    }

    public function delete(Trip $trip){
        $trip->delete();
        return redirect('/tracker');
    }
}
