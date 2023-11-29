@extends('layout')

@section('content')

    <div class="account-details">
        <h1 style="text-align: center; text-xl font-semibold text-gray-900 dark:text-white"> User Profile </h1>
        @csrf
        <div class="form-group flex" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
        </div>
        <br>
        <div class="form-group flex">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}">
            @error('email')
                <p style="color: red; font-size: 12px;">{{  $message }}</p>
            @enderror
        </div>
        <br>
        {{-- <div class="form-group flex">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{ auth()->user()->password }}">
            @error('password')
                <p style="color: red; font-size: 12px;">{{  $message }}</p>
            @enderror
        </div> --}}
        <form method="POST" action="{{ route('delete-user', ['user' => auth()->user()->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button">DELETE ACCOUNT</button>
        </form>
        <br>
        {{-- <form method="POST" action="{{ route('update-user') }}">
            <button type="submit" class="button">UPDATE ACCOUNT</button>
        </form> --}}
        {{-- <br> --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="button">Log Out</button>
        </form>
    </div>

@endsection
