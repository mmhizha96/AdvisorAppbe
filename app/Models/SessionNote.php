<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionNote extends Model
{
    protected $table='session_notes';
    protected $primaryKey='appointment_id';
    protected $fillable=[
        'advisor_id',
        'student_id',
        'note',
        'date_created',


    ];

    protected $timestamps=false;
}
