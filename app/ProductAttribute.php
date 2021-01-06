<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $fillable =[
        'uuid',
        'name_en',
        'name_kh',
        'slug',
        'description_en',
        'description_kh',
        'create_by',
        'update_by',
        'active',
        'delete',
        'date_sign_up'
    ];
    protected $hidden=[
        'id',
    ];
}
