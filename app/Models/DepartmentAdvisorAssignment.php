<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentAdvisorAssignment extends Model
{
    protected $table='department_advisor_assignment';

    protected $primaryKey='department_advisor_id';
    protected $fillable=[
        'advisor_id',
        'department_id',
       

    ];

    protected $timestamps=false;
}
