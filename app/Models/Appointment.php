<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table='appointments';

    protected $primaryKey='appointment_id';
    protected $fillable=[
        'assignment_id',
        'student_id',
        'advisor_id',
        'date',
        'status',
        'purpose'


    ];

    protected $timestamps=false;
}
