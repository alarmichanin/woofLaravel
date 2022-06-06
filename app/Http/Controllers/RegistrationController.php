<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function save(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
//        TODO: this checking doesn't work
        if (User::query()->where('email', $validateFields['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors(['email' => "Такий користувач уже зареєстрований"]);
        }

        $user = User::query()->create($validateFields);
        if ($user) {
//            auth()->login($user);
            Auth::login($user);
            return redirect(route('user.profile'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => "Відбулася помилка при збереженні користувача"
        ]);
    }
}
