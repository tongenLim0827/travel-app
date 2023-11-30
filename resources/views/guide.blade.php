@extends('layout')

@section('content')
    <div class="cards-container">
        <h1 style="font-size: 60px;"> Let's Get Started! </h1>
            <div class="centre-card">
                <div class="card-title" >
                    <div style="background-color: rgb(206, 193, 193); margin: auto; padding: auto; text-align: center;">
                        <h3> Step 1 - Navigate to Tracker Tab </h3>
                    </div>
                    <p style="margin-left: 30px; margin-right:30px; text-align: center;">
                        Log in to your account OR Create an account first before using our app and navigate to the
                        "Tracker" tab.
                    </p>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="centre-card">
                <div class="card-title">
                    <div style="background-color: rgb(206, 193, 193); margin: auto; padding: auto; text-align: center;">
                        <h3> Step 2 - Adding New Trip and View Trip History </h3>
                    </div>
                    <p style="margin-left: 30px; margin-right:30px; text-align: center;">
                        On the Tracker tab, you'll see a list of trips associated with the user.
                        Fill in the required information such as trip name, description, and people.
                        Click "Add Trip" to save.
                    </p>
                </div>
            </div>

            {{-- <img src="images/down-arrow.png" style="width: 50px; height: auto; margin-left: 50%;"> --}}

            <!-- STEP 3 -->
            <div class="centre-card">
                <div class="card-title">
                    <div style="background-color: rgb(206, 193, 193); margin: auto; padding: 10px; width: 300px; text-align: center;">
                        <h3> Step 3 - View or Delete Trips </h3>
                    </div>
                    <p style="margin-left: 30px; margin-right:30px; text-align: center;">
                        For each trip, you can view detailed information about a specific trip
                        OR delete them by clicking on the respective buttons.
                    </p>
                </div>
            </div>

            {{-- <img src="images/down-arrow.png" style="width: 50px; height: auto; margin-left: 50%;"> --}}

            <!-- STEP 4 -->
            <div class="centre-card">
                <div class="card-title">
                    <div style="background-color: rgb(206, 193, 193); margin: auto; padding: 15px; width: 550px; text-align: center;">
                        <h3> Step 4 - Adding New Expenses to a trip </h3>
                    </div>
                    <p style="margin-left: 30px; margin-right:30px; text-align: center;">
                        In the trip details page, scroll down to the "Expenses History" section.
                        Click on the "Add New Expenses" button.
                        Fill in the expense details like name, category, description, and amount.
                        Click "Add" to save the new expense.
                    </p>
                </div>
            </div>

            <!-- STEP 5 -->
            <div class="centre-card">
                <div class="card-title">
                    <div style="background-color: rgb(206, 193, 193); margin: auto; padding: 15px; width: 750px; text-align: center;">
                        <h3> Step 5 - View total expense and settle payments </h3>
                    </div>
                    <p style="margin-left: 30px; margin-right:30px; text-align: center;">
                        Below the expense history, you'll see the total expenses for the trip.
                        To settle payments, users can take the total expenses and divide by the number of people involved in the trip.
                        We offer various payment methods like Wise, BigPay, TNG eWallet, etc for users to settle expenses efficiently.
                    </p>
                </div>
            </div>
    </div>

@endsection

