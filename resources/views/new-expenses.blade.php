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
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" required>
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
