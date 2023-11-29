@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/tracker/{trip}/details">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> New Expenses </h1>
        <form method="POST" action='{{  route('expense.store') }}'>
            @csrf
            <input type="hidden" name="trip_id" value="{{ $trip->id }}">
            <div class="form-group flex">
                <label for="name"> Expenses Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="form-group flex">
                <label for="category">Category:</label>
                {{-- <label for="fruit">Select a fruit:</label> --}}
                    <select id="category" name="category" style="width: 80%; height: 30px; font-size: 16px">
                        <option value="default"> </option>
                        <option value="accommodation">Accommodation</option>
                        <option value="transport">Transport</option>
                        <option value="food">Food</option>
                        <option value="beverage">Beverage</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="others">Others</option>
                        <option value="beverage">Beverage</option>
                        <option value="data">Data Plan</option>
                    </select>
                {{-- <input type="text" id="category" name="category" required> --}}
            </div>
            <br>
            <div class="form-group flex">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" required>
            </div>
            <br>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" required>
            </div>
            <br>
            <button type="submit" class="add-button">Add</button>
        </form>
    </div>

@endsection
