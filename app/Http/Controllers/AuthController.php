<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function register(UserRegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create(['name' => $validated['name'], 'email' => $validated['email'], 'password' => bcrypt($validated['password'])]);

        Auth::loginUsingId($user->id); // ? Как по другому можно это сделать

        $request->session()->regenerate(); // ? Зачем вот это нужно
        return redirect('/');
    }

    public function login(UserLoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate(); // ? Зачем
            return redirect('/');
        }
        return redirect()->back()->with('login_errors', true);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // ? Зачем
        $request->session()->regenerateToken(); // ? Зачем
        return redirect('/');
    }
}
