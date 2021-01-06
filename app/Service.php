<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable =[
        'uuid',
        'name_en',
        'name_kh',
        'slug',
        'thumbnail',
        'description_en',
        'description_kh',
        'active',
        'delete',
    ];
    protected $hidden=[
        'id','parent_id'
    ];
}
