<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable =[
        'uuid',
        'name',
        'image',
        'description',
        'show',
        'active',
        'delete',
    ];
    protected $hidden=[
        'id'
    ];
}
