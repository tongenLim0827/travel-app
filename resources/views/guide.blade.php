@extends('layout')

@section('content')
    <div class="cards-container">
        <div class="wrapper">
            <h1> Let's Get Started! </h1>

            <!-- STEP 1 -->
            <div class="centre-card">
                <div class="card-title">
                    <p> Step 1: Navigate to Tracker tab </p>
                </div>

                {{-- <div class="card-content">
                    <p>

                    </p>
                </div> --}}
            </div>

            <img src="images/down-arrow.png" style="width: 50px; height: auto; margin-left: 50%;">

            <!-- STEP 2 -->
            <div class="centre-card">
                <div class="card-title">
                    <p> Step 2: Here you will see the details of your trip history.
                        Click on View to view the details for each trip OR
                        Add a new trip by filling out the form with the necessary information
                    </p>
                </div>
            </div>

            <img src="images/down-arrow.png" style="width: 50px; height: auto; margin-left: 50%;">

            <!-- STEP 3 -->
            <div class="centre-card">
                <div class="card-title">
                    <p> Step 3: After clicking View, the details for each trip will be displayed including the breakdown of trip expenses </p>
                </div>
            </div>

            <img src="images/down-arrow.png" style="width: 50px; height: auto; margin-left: 50%;">

            <!-- STEP 4 -->
            <div class="centre-card">
                <div class="card-title">
                    <p> Step 4: Add a new expenses to the trip by clicking on the Add Expenses button </p>
                </div>
            </div>

            <img src="images/down-arrow.png" style="width: 50px; height: auto; margin-left: 50%;">

            <!-- STEP 5 -->
            <div class="centre-card">
                <div class="card-title">
                    <p> Step 5: To settle the payment, navigate to the Transfer tab and select your preferred payment method </p>
                </div>
            </div>
        </div>
    </div>

@endsection

