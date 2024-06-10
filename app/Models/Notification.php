<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table='notifications';
    protected $primaryKey='notification_id';
    protected $fillable=[
        'recipient_id',
        'message',
        'date_sent',
        'status',
      
    ];

    protected $timestamps=false;
}
