<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Stadium;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function index(){
        $title='Appointments';
        if (\admin()->user()->type == 'admin') {
            $stadiums_ids=Stadium::where('admin_id',\admin()->user()->id)->pluck('id')->toArray();
            $appointments = Appointment::with(['stadium', 'user'])
                ->whereIn('stadium_id',$stadiums_ids)
                ->get();
        }else{
            $appointments = Appointment::with(['stadium', 'user'])->get();
        }
        return view('admin.appointment.list',compact('title','appointments'));
    }

    public function change_appointment_status($appointment_id,$type){
        Appointment::find($appointment_id)->update([
           'type'=>$type
        ]);
        alert('Success','Appointment Type Update Successful');
        return back();
    }
}
