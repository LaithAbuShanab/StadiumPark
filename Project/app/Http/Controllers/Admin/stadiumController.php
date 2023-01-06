<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Stadium;
use Illuminate\Http\Request;

class stadiumController extends Controller
{
    public function index(){

        $title="Manage Hours";
        if (admin()->user()->type == 'admin'){
            $stadiums=Stadium::where('admin_id',admin()->user()->id)->get();
        }else{
            $stadiums=Stadium::get();
        }

        return view('admin.stadium.list',compact('title','stadiums'));
    }

    public function get($id=null){

        $admins=Admin::where('type','admin')->get();
        if ($id > 0){
            $title="Edit Stadium";
            $stadium=Stadium::find($id);
            return view('admin.stadium.form',compact('title','stadium','admins'));
        }
        $title="Create New Stadium";
        return view('admin.stadium.form',compact('title','admins'));
    }


    public function save(){

        $data=$this->validate(\request(),[
            'name'=>'required',
            'type'=>'required',
            'address'=>'required',
            'details'=>'required',
            'admin_id'=>'required',
        ]);

        $id=\request('id');

        if ($id > 0){

            if (!empty(request()->file('image'))) {
                $oldImage = Stadium::find($id);
                $imageName = uploadFile("update", 'image', 'uploads' . DS . 'stadium' . DS, $oldImage->image);
                $data['image'] = 'uploads/stadium/'. $imageName['image'];
            }

            Stadium::find($id)->update($data);
            alert('Update','Information Save Successful', 'success');
            return redirect('admin/stadium');
        }

        if (!empty(request()->file('image'))) {
            $imageName = uploadFile('create', 'image', 'uploads' . DS . 'stadium'. DS, null);
            $data['image']= 'uploads/stadium/'. $imageName['image'];
        }
        Stadium::create($data);
        alert('Create','Information Save Successful', 'success');
        return redirect('admin/stadium');
    }


    public function delete($id){
        Stadium::find($id)->delete();
        alert('Delete','Information Delete Successful', 'success');
        return back();
    }

}
