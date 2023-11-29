@extends('layout')

@section('content')

    <!-- Add New Trip -->
    <div class="account-details">
        <a class="btn btn-primary" href="/">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> New Trip </h1>
        <form method="POST" action="{{ route('tracker.store') }}">
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

    <div class="display-container">
        <h1 style="text-align: center;">Trip History</h1>
        <div>
            <table class="table-form" style="width: 100%; table-layout: fixed; ">
                <thead>
                    <colgroup>
                        <col style="width: 20%;" /> <!-- 25% for each column -->
                        <col style="width: 25%;" />
                        <col style="width: 25%;" />
                        <col style="width: 30%;" />
                    </colgroup>
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
                                <a href="{{ route('tracker.view', ['trip' => $trip] )}}" class="display-inline">
                                    <button type="button" class="view-button">View</button>
                                </a>

                                {{-- <a href="{{ route('tracker.delete', ['trip' => $trip])}}">
                                    <button type="button" class="delete-button">Delete</button>
                                </a> --}}
                                <form method="POST" action="{{ route('tracker.delete', ['trip' => $trip]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
