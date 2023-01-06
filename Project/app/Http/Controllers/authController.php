<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index(){
        $title="Welcome to ".env('APP_NAME');
        return view('user.auth.login',compact('title'));
    }

    public function login(){
        $remember_me = request()->has('remember_me') ? true : false;

        if (auth()->attempt(['email' => request('email'), 'password' => request('password')], $remember_me)) {
            return redirect('home');
        } else {
            return back()->withErrors(['error_login' => 'Login information is not exist..!']);
        }
    }


    public function register(){
        $data=$this->validate(\request(),[
           'name'=>'required',
           'email'=>'required|email|unique:users',
           'password'=>'required',
           'mobile'=>'required|min:10|max:10',
        ]);

        $data['password']=bcrypt(\request('password'));
        $data['status']='pending';

        $user=User::create($data);
        Auth::login($user);
        return redirect('home');
    }


    public function logout(){
        auth()->logout();
        session()->flush();
        return redirect('/');
    }
}














