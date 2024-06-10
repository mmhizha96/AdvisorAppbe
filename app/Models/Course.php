<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    protected $primaryKey='course_id';
    protected $fillable=[
        'program_id',
        'course_name',
    



    ];

    protected $timestamps=false;
}
