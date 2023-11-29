@extends('layout')

@section('content')
    <a style="font-size: 20px; margin-left: 50px; color: black;" href="/"> Back </a>

    <div class="account-details">
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> User Profile </h1>
        @csrf
        <div class="form-group flex" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        <div class="form-group flex">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            @error('email')
                <p style="color: red; font-size: 12px;">{{  $message }}</p>
            @enderror
        </div>
        <br>
        <div class="form-group flex">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <p style="color: red; font-size: 12px;">{{  $message }}</p>
            @enderror
        </div>
        <form method="POST" action="{{ route('delete-user') }}">
            <button type="submit" class="delete-button">DELETE ACCOUNT</button>
        </form>
        <form method="POST" action="{{ route('delete-user') }}">
            <button type="submit" class="delete-button">UPDATE ACCOUNT</button>
        </form>
    </div>

@endsection
