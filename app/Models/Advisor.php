<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    protected $table='advisors';

    protected $primaryKey='advisor_id';
    protected $fillable=[
        'first_name',
        'last_name',
        'sex',
        'age',
        'phone_number',
        'office_location',
        'user_id',

    ];

    protected $timestamps=false;


}
