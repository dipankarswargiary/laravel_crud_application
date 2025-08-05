<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'phone_no' => 'required|unique:users',
                'password' => 'required|min:6|max:18|confirmed',
            ]
        );

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/employees');
    }
}
