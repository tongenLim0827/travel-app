<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\console;
use App\Models\Trip;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class UserController extends Controller
{
    /**
     * Load user profile blade
     */
    public function create(User $user)
    {
        return view('profile', ['user' => $user]);
    }

    /**
     * Load the forgot password blade
     */
    public function forgot()
    {
        return view('forgot-password');
    }

    /**
     * Load the reset password blade
     */
    public function edit(string $token)
    {
        return view('reset-password', ['token'=>$token]);
    }

    /**
     * Reset password successfully
     */
    public function successful()
    {
        return view('reset-successful');
    }

    /**
     * Send password reset email
     */
    public function send(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

     /**
     * Reset the password
     */
    public function reset(Request $request)
    {
        // TO-DO
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
    }

    /**
     * Update user details
     */
    public function update(Request $request, User $user)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255'
        ]);

        // dd($request->input('email'));
        // Get the authenticated user
        // $user = auth()->user();
        // $user = User::where('email', $request->input('email'))->first();

        // Update user information
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        return redirect('/')->with('success', 'Profile updated successfully.');
    }

    /**
     * Delete user
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/');
    }
}
