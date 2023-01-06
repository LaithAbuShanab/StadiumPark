<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function save(){
        $data=$this->validate(\request(),[
           'time_from'=>'required',
           'time_to'=>'required',
           'appointment_date'=>'required',
           'stadium_id'=>'required',
        ]);
        $data['user_id']=auth()->user()->id;
        $data['type']="pending";


        $appointment_date=\request('appointment_date');
        $from=\request('time_from');
        $to=\request('time_to');


        // if time from  and time  to  exist return false
        $check=Appointment::where('time_from',$from)
            ->where('time_to',$to)
            ->where('appointment_date',$appointment_date)
            ->count();
        if ($check > 0){
            alert('error','this appointment already taken','error');
        }


        $max_to_appointment=Appointment::where('appointment_date', $appointment_date)->max('time_to');

        // if value >=   max  time_to  => can appointment else  can't

        if (\request('time_from') > $max_to_appointment){
            Appointment::create($data);
            alert('success','your appointment send successful','success');
            return redirect('myAppointment');
        }else{
            alert('error','this appointment already taken','error');
            return back();
        }

    }

    public function cancel_appointment($id){
        Appointment::find($id)->update([
            'type'=>'cancel'
        ]);
        alert('success','your appointment canceled','success');
        return back();

    }
}
