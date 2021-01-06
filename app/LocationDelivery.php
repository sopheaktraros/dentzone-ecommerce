<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationDelivery extends Model
{
    protected $fillable =[
        'uuid',
        'location_id',
        'estimate',
        'fee',
        'fee_reference',
        'create_by',
        'update_by',
        'active',
        'delete'
    ];
    protected $hidden=[
        'id'
    ];
}
