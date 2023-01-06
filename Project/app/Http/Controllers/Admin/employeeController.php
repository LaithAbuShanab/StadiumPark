<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        $title = "Manage Employees";
        $employees = Admin::where('type','admin')->get();
        return view('admin.employee.list', compact('title', 'employees'));


    }

    public function get($id = null)
    {
        if ($id > 0) {
            $title = "Edit Employee";
            $employee = Admin::find($id);
            return view('admin.employee.form', compact('title', 'employee'));
        }
        $title = "Create New Employee";
        return view('admin.employee.form', compact('title'));
    }


    public function save()
    {
        $data = $this->validate(\request(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $data['type']='admin';


        $id = \request('id');

        /*
         * Update employee
         */
        if ($id > 0) {

            if (!empty(request()->file('image'))) {
                $oldImage = Admin::find($id);
                $imageName = uploadFile("update", 'image', 'uploads' . DS . 'employee' . DS, $oldImage->image);
                $data['image'] = 'uploads/employee/' . $imageName['image'];
            }

            if (!empty(\request('password'))){
                $data['password']=bcrypt(\request('password'));
            }

            Admin::find($id)->update($data);
            alert('Update', 'Information Save Successful', 'success');
            return redirect('admin/employee');
        }


        /*
         * create new employee
         *
         */

        if (!empty(request()->file('image'))) {
            $imageName = uploadFile('create', 'image', 'uploads' . DS . 'employee' . DS, null);
            $data['image'] = 'uploads/employee/' . $imageName['image'];
        }

        if (!empty(\request('password'))){
            $this->validate(\request(),[
                'password' => 'required',
            ]);
            $data['password']=bcrypt(\request('password'));
        }

        // insert into admin
        Admin::create($data);
        alert('Create', 'Information Save Successful', 'success');
        return redirect('admin/employee');
    }


    public function delete($id)
    {
        Admin::find($id)->delete();
        alert('Delete', 'Information Delete Successful', 'success');
        return back();

    }

}
