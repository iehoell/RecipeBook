<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $login = $request->input('login');
        $password = $request->input('password');
        $password__confirmation = $request->input('password__confirmation');

        //dd($name, $login, $password, $password__confirmation);

        if($password !== $password__confirmation){
            // ошибка регистрации
            return redirect()->back()->withInput();
        }

        return redirect()->route('home');
    }
}
