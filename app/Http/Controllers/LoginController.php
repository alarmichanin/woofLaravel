<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->intended('profile');
        }

        $formField = $request->only(['email', 'password']);

        if (Auth::attempt($formField)) {
            return redirect()->intended('profile');
        }
        return redirect(route('user.login'))->withErrors([
            'email' => 'Не вдалося авторизуватися!'
        ]);
    }
}
