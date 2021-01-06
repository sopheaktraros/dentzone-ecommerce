<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationSubscript extends Model
{
    protected $fillable =[
        'tittle',
        'description',
        'sent_by',
    ];
    protected $hidden=[
        'id','subscript_id'
    ];
}
