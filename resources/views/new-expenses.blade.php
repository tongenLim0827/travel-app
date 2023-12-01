@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/tracker/{trip}/details">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> New Expenses </h1>
        <form method="POST" action='{{  route('expense.store', ['trip' => $trip]) }}'>
            @csrf
            <input type="hidden" name="trip_id" value="{{ $trip }}">
            <div class="form-group flex">
                <label for="name"> Expenses Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="form-group flex">
                <label for="category">Category:</label>
                    <select id="category" name="category" style="width: 80%; height: 30px; font-size: 16px">
                        <option value="default"> </option>
                        <option value="Accommodation">Accommodation</option>
                        <option value="Transport">Transport</option>
                        <option value="Food">Food</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Others">Others</option>
                        <option value="Data Plan">Data Plan</option>
                    </select>
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
