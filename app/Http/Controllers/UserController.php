<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\console;
use App\Models\Trip;

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

    public function update(Request $request, User $user)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email|max:255'
        ]);

        dd($user);
        // Get the authenticated user
        $user = auth()->user();
        $user = User::where('email', $request->input('email'))->first();

        // Update user information
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect('/')->with('success', 'Profile updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/');
    }

    public function reset(Request $request)
    {
        $user = auth()->user();
        
    }
}
