<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    /**
     * Load login blade
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Authenticate user
     */
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();

            return redirect('/'); // Redirect back to home page, successfully log in
        }

        // Authentication failed, return with 'invalid credential' message 
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Log out the user
     */
    public function destroy(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
