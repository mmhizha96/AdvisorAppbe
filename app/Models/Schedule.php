<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table='schedules';
    protected $primaryKey='schedule_id';
    protected $fillable=[
        'advisor_id',
        'day_of_week',
        'start_time',
        'end_time',


    ];

    protected $timestamps=false;
}
