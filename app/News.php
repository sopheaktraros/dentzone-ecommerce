<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =[
        'uuid',
        'tittle_en',
        'tittle_kh',
        'slug',
        'thumbnail',
        'description_en',
        'description_kh',
        'create_by',
        'update_by',
        'active',
        'delete'
    ];
    protected $hidden=[
        'id'
    ];
}
