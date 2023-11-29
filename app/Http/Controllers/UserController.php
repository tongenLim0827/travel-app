<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\console;

class UserController extends Controller
{
    public function create()
    {
        return view('profile');
    }

    public function forgot()
    {
        return view('forgot-password');
    }

    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email|max:255'
        ]);

        // Get the authenticated user
        // $user = auth()->user();
        // print_r("validate successful");
        $user = User::where('email', $request->input('email'))->first();
        dd($user);
        print_r($user);

        // Update user information
        $user->update([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        // Find the user by email
        // $user = User::where('email', $request->input('email'))->first();
        // // If the given email exists, then reset user password
        // if ($user) {
        //     $user->password = Hash::make($request->input('password'));
        //     $user->save();

        //     return redirect('/');
        // }
        // else {
        //     return redirect('/guide')
        //     ->withErrors(['email' => 'User with this email address not found.'])
        //     ->withInput();
        // }
        return redirect('/')->with('success', 'Profile updated successfully.');
    }

    public function destroy()
    {
        //
    }

    public function reset()
    {
        //
    }
}
