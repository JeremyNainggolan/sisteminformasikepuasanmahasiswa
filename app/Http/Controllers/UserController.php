<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home() {
        $data['page_title'] = 'Home';
        return view('home', compact('data'));
    }

    public function report()
    {
        $data['page_title'] = 'Report';
        return view('report', compact('data'));
    }

    public function post_report(Request $request)
    {
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
        exit();
    }

    public function login() {
        $data['page_title'] = 'Login';
        if (auth()->check()) {
            return redirect('/home');
        }
        return view('login', compact('data'));
    }
    function authentication(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('nim', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(url('home'));
        }

        return redirect(url('login'))->with('error', 'Student ID or Password is Invalid');
    }

}
