@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> New Expenses </h1>
        <form method="POST" action='register'>
            @csrf
            <div class="form-group flex" >
                <label for="name"> Expenses Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="form-group flex">
                <label for="email">Category:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>
            <div class="form-group flex">
                <label for="password">Description:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <div class="form-group">
                <label for="password_confirmation">Amount:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <br>
            <button type="submit" class="add-button">Add</button>
        </form>
    </div>

@endsection
