@extends('layout')

@section('content')

    <!-- Trip Details -->
    <div class="account-details">
        <a class="btn btn-primary" href="/tracker">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> {{ $trip->name }} </h1>
        <form method="POST" action="{{ route('tracker.edit', ['trip' => $trip]) }}">
            @csrf
            @method('PUT')
            <div class="form-group flex">
                <label for="description">Trip Description:</label>
                <input type="text" id="description" name="description" value="{{ $trip->description }}"/>
            </div>
            <br>
            <div class="form-group flex">
                <label for="people">People:</label>
                <input type="text" id="people" name="people" value="{{ $trip->people }}"/>
            </div>
            <br>
            <button type="submit" class="update-button">Update</button>
        </form>
    </div>
    <br>
    <div class="display-container">
        <h1 style="text-align: center;"><u>Expenses History</u></h1>
        <div>
            <table class="table-form" style="width: 1000px; table-layout: fixed;">
                <thead>
                    <tr>
                        <th>Expenses Name</th>
                        <th>Category</th>
                        <th>Expenses Description</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $expense)
                        <tr>
                            <td>{{ $expense->name }}</td>
                            <td>{{ $expense->category }}</td>
                            <td>{{ $expense->description }}</td>
                            <td>{{ $expense->amount }}</td>
                            <td>
                                <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                                    <a href="{{ route('expense.view', ['trip' => $trip, 'expense' => $expense] )}}" class="display-inline">
                                        <button type="button" class="view-button">View</button>
                                    </a>
                                    <br>
                                    <form method="POST" action="{{ route('expense.delete', ['trip' => $trip, 'expense' => $expense]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <br>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div style="text-align: right; margin-top: 50px;">
            <a href="{{ route('expense.create', ['trip' => $trip])}}">
                <button type="button" class="add-expense-button">Add New Expenses</button>
            </a>
        </div>
    </div>

@endsection
