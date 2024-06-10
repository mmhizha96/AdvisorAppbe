<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table='programmes';
    protected $primaryKey='programme_id';
    protected $fillable=[
        'name',
        'code',
        'department_id',
    

    ];

    protected $timestamps=false;
}
