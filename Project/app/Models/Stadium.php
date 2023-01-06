<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stadium extends Model
{
    use SoftDeletes;
    protected $table='stadiums';
    protected $dates=['deleted_at'];
    protected $fillable=[
        'name',
        'image',
        'address',
        'details',
        'admin_id',
        'type',
    ];

    public function getAdmin(){
        return $this->belongsTo('App\Models\Admin','admin_id','id');
    }

}
