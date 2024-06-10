<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProgramAssignment extends Model
{
    protected $table='student_program_assignment';

    protected $primaryKey='student_programme_id';
    protected $fillable=[
        'student_id',
        'program_id',


    ];

    protected $timestamps=false;
}
