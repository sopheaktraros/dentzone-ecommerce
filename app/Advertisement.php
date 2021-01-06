<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable =[
        'uuid',
        'slug',
        'name_en',
        'name_kh',
        'url',
        'image',
        'start_date',
        'end_date'
    ];
    protected $hidden=[
        'id'
    ];
}
