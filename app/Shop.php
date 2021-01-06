<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable =[
        'uuid',
        'name',
        'phone_line1',
        'phone_line2',
        'total_sold',
        'business_email',
        'address',
        'description',
        'logo',
        'commission',
        'status',
        'reason',
        'active',
        'delete',
    ];
    protected $hidden=[
        'id','user_id','location_id'
    ];
}
