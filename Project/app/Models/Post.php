<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    protected $fillable=[
      'details',
      'video',
      'image',
      'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

}
