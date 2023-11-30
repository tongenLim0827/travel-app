@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/tracker/{{$trip}}/details">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> {{ $expense->name }} </h1>
        <form method="POST" action='{{  route('expense.edit', ['expense' => $expense, 'trip' => $trip]) }}'>
            @csrf
            @method('PUT')
            <input type="hidden" name="trip_id" value="{{ $trip }}">
            <div class="form-group flex">
                <label for="name"> Expenses Name:</label>
                <input type="text" id="name" name="name" value="{{ $expense->name }}">
            </div>
            <br>
            <div class="form-group flex">
                <label for="category">Category:</label>
                    <select id="category" name="category" style="width: 80%; height: 30px; font-size: 16px">
                        <option value="default"> {{ $expense->category }} </option>
                        <option value="accommodation">Accommodation</option>
                        <option value="transport">Transport</option>
                        <option value="food">Food</option>
                        <option value="beverage">Beverage</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="others">Others</option>
                        <option value="beverage">Beverage</option>
                        <option value="data">Data Plan</option>
                    </select>
            </div>
            <br>
            <div class="form-group flex">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" value="{{ $expense -> description }}">
            </div>
            <br>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" value="{{ $expense->amount }}">
            </div>
            <br>
            <button type="submit" class="add-button">Update</button>
        </form>
    </div>

@endsection
