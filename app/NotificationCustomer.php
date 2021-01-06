<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationCustomer extends Model
{
    protected $fillable =[
        'tittle',
        'description',
        'sent_by',
    ];
    protected $hidden=[
        'id','customer_id'
    ];
}
