<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'uuid',
        'slug',
        'name_en',
        'name_kh',
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
