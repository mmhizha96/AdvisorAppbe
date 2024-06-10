<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';

    protected $primaryKey='student_id';
    protected $fillable=[
        'first_name',
        'last_name',
        'sex',
        'age',
        'phone_number',
        'user_id',

    ];

    protected $timestamps=false;
}
