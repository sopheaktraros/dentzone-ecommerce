<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $fillable =[
        'uuid',
        'slug',
        'name',
        'location_id',
        'address',
        'create_by',
        'update_by',
        'active',
        'delete'
    ];
    protected $hidden=[
        'id'
    ];
}
