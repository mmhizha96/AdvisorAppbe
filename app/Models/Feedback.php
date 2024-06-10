<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table='feedback';
    protected $primaryKey='feedback_id';
    protected $fillable=[
        'students_id',
        'advisor_id',
        'comments',
        'date',
        'appointment_id'
    ];

    protected $timestamps=false;
}
