<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table='departments';

    protected $primaryKey='department_id';
    protected $fillable=[
        'name',
        'code',




    ];

    protected $timestamps=false;
}
