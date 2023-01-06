<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $title="Manage Users";
        $users=User::get();
        return view('admin.user.list',compact('title','users'));
    }


    public function change_user_status($user_id , $status){
        User::find($user_id)->update([
            'status'=>$status
        ]);
        alert('Success','Account status is updated successful');
        return back();
    }

    public function get($id=null){

        if ($id > 0){
            $title="Edit User";
            $user=User::find($id);
            return view('admin.user.form',compact('title','user'));
        }
        return  redirect('admin/user');
    }

}
