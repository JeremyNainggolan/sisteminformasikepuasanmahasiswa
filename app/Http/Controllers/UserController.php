<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'inlineRadioOptions' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['comment'] = $request->comment;
        $data['kategori'] = $request->kategori;
        $data['rating'] = $request->inlineRadioOptions;

        DB::table('reports')->insert($data);

        return redirect(url('home'))->with('success', 'Report Berhasil Dikirim');

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
