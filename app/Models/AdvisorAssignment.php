<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvisorAssignment extends Model
{
    protected $table='advisor_assignment';

    protected $primaryKey='advisor_id';
    protected $fillable=[
        'assignment_id',
        'student_id',
        'advisor_id',
        'date_assigned',
        'status',
       

    ];

    protected $timestamps=false;
}
