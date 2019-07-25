<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('layouts.primary', [
            'page' => 'pages.registerform',
            'title' => 'Регистрация'
        ]);
    }

    public function registerPost(RegisterFormRequest $request)
    {
        User::create([
            'fname' => $request->input('fname'),
            'name' => $request->input('name'),
            'sname' => $request->input('sname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => $request->input('role')
        ]);

        return redirect()->route('public.main');
    }

    public function login()
    {
        return view('layouts.secondary', [
            'page' => 'pages.authform',
            'title' => 'Авторизация'
        ]);
    }

    public function loginPost(Request $request)
    {
        $remember = $request->input('remember') ? true : false;

        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember);

        if ($authResult) {
            return redirect()->route('public.main');
        } else {
            return redirect()
                ->back()
                ->with('authError', 'Неправильный логин или пароль!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('public.main');
    }
}
