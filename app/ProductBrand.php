<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $fillable =[
        'product_id',
        'brand_id',
    ];
    protected $hidden=[
        'id',
    ];
}
