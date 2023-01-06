<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hour;
use Illuminate\Http\Request;

class hourController extends Controller
{
    public function index(){
        $title="Manage Hours";
        $hours=Hour::get();
        return view('admin.hour.list',compact('title','hours'));
    }

    public function get($id=null){

        if ($id > 0){
            $title="Edit Hour & Price";
            $hour=Hour::find($id);
            return view('admin.hour.form',compact('title','hour'));
        }
        $title="Create New Hour & Price";
        return view('admin.hour.form',compact('title'));
    }


    public function save(){

        $data=$this->validate(\request(),[
           'hour_count'=>'required',
           'price'=>'required',
        ]);

        $id=\request('id');

        if ($id > 0){
            Hour::find($id)->update($data);
            alert('Update','Information Save Successful', 'success');
            return redirect('admin/hour');
        }

        Hour::create($data);
        alert('Create','Information Save Successful', 'success');
        return redirect('admin/hour');
    }


    public function delete($id){
        Hour::find($id)->delete();
        alert('Delete','Information Delete Successful', 'success');
        return back();
    }
}
