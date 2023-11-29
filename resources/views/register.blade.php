@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white">Register Account </h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group flex">
                <label for="email">Name:</label>
                <input type="name" id="name" name="name" required>
                @error('name')
                    <p style="color: red; font-size: 12px;">{{  $message }}</p>
                @enderror
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
                <label for="password"> Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <p style="color: red; font-size: 12px;">{{  $message }}</p>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="password_confirmation">Comfirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <br>
            <button type="submit" class="register-button">Register</button>
        </form>
    </div>

@endsection
