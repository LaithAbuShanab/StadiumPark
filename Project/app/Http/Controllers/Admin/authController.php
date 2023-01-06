<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function index(){
        $title="Welcome to ".env('APP_NAME');
        return view('admin.auth.login',compact('title'));
    }

    public function login(){

        $remember_me = request()->has('remember_me') ? true : false;

        if (admin()->attempt(['email' => request('email'), 'password' => request('password')], $remember_me)) {
            return redirect('admin/stadium');
        } else {
            return back()->withErrors(['error_login' => 'These credentials do not match our records.']);
        }
    }

    public function logout(){
        admin()->logout();
        session()->flush();
        return redirect('admin');
    }

}
