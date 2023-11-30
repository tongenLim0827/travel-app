@extends('layout')

@section('content')

    <!-- Add New Trip -->
    <div class="account-details">
        <a class="btn btn-primary" href="/">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> New Trip </h1>
        <form method="POST" action="{{ route('tracker.store') }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            @csrf
            <div class="form-group flex" >
                <label for="name"> Trip Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="form-group flex">
                <label for="description">Trip Description:</label>
                <input type="text" id="description" name="description">
            </div>
            <br>
            <div class="form-group flex">
                <label for="people">Add People:</label>
                <input type="text" id="people" name="people">
            </div>
            <br>
            <button type="submit" class="add-button">Add Trip</button>
        </form>
    </div>

    <br>
    <!-- Trip History -->
    <div class="display-container">
        <p style="text-align: center; font-size:36px; font-weight: 25px;"><u>Trip History</u></p>
        <div>
            <table class="table-form" style="width: 100%; table-layout: fixed; ">
                <thead>
                    <tr>
                        <th>Trip Name</th>
                        <th>Trip Description</th>
                        <th>People</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trips as $trip)
                        <tr>
                            <td>{{ $trip->name }}</td>
                            <td>{{ $trip->description }}</td>
                            <td>{{ $trip->people }}</td>
                            <td>
                                <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                                    <a href="{{ route('tracker.view', ['trip' => $trip] )}}" class="display-inline">
                                        <button type="button" class="view-button">View</button>
                                    </a>

                                    <form method="POST" action="{{ route('tracker.delete', ['trip' => $trip]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
