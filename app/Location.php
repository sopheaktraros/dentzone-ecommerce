<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =[
        'uuid',
        'name_en',
        'name_kh',
        'parent_id',
        'type',
        'slug',
        'description_en',
        'description_kh',
        'active',
        'delete'
    ];
    protected $hidden=[
        'id'
    ];
}
