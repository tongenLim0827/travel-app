<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('/register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required | max:255',
            'email' => 'required | email | max: 255',
            'password' => 'required'
        ]);

        $user = User::create($attributes);

        //log the user in
        auth()->login($user);

        return redirect('/');
    }
}
