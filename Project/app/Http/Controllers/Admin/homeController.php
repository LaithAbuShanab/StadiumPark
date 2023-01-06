<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $title="Home";
        return view('admin.home.dashboard',compact('title'));

    }
}
