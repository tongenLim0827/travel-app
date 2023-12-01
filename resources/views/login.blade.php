@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white">Please log in to continue</h1>
        <form method="POST" action='/login'>
            @csrf
            <div class="form-group flex">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <p style="color: red; font-size: 12px; margin: auto;">{{  $message }}</p>
                @enderror
            </div>
            <br>
            <div class="form-group flex">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <button type="submit" class="login-button">LOG IN</button>
        </form>
    </div>

@endsection
