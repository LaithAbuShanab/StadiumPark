<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table='appointments';
    protected $fillable=[
        'type',
        'stadium_id',
        'user_id',
        'time_from',
        'time_to',
        'appointment_date',
        'status',
    ];

    public function stadium(){
        return $this->belongsTo('App\Models\Stadium','stadium_id','id');
    }



    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

}
