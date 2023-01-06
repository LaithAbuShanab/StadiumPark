<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hour extends Model
{
    use SoftDeletes;
    protected $table='hours';
    protected $dates=['deleted_at'];
    protected $fillable=[
        'hour_count',
        'price',
    ];
}
