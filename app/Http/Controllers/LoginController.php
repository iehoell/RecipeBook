<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        //dd($login, $password);
        
        session()->put('login', $login);

        // if($login !== $password){
        //     // ошибка ввода пароля и логина
        //     return redirect()->back()->withInput();
        // }

        return redirect()->route('home');
    }
}
