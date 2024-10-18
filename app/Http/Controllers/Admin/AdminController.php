<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        $data['page_title'] = "Admin Login";
        if (auth()->check()) {
            if (auth()->user()->type == 'admin') {
                return redirect(url('admin/dashboard'));
            }
        }

        return view('admin.auth.login', compact('data'));
    }
    function post_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil dan user adalah admin
            if (auth()->user()->type == 'admin') {
                return redirect()->intended(url('admin/dashboard'));
            }
        }

        return redirect(url('admin/login'))->with('error', 'Username or Password is Invalid');
    }
    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(url('login'));
    }
}
