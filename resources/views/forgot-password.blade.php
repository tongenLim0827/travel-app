@extends('layout')

@section('content')

    <div class="account-details">
        <a class="btn btn-primary" href="/">Back</a>
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white">Forgot Password</h1>
        <p>
            Forgot your password? No problem. Just let us know your email address and we will email you a
            password reset link that will allow you to choose a new one.
        </p>

        @if(session('status'))
            <div class="alert alert-success" style="color: blue;" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <br>
        
        <form method="POST" action="{{ route('forgot-password') }}">
            @csrf
            <div class="form-group flex">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <p style="color: red; font-size: 12px;">{{  $message }}</p>
                @enderror
            </div>
            <button type="submit" class="button">Send Reset Password Email</button>
        </form>
    </div>

@endsection
