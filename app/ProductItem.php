<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    protected $fillable =[
        'uuid',
        'sku',
        'price',
        'qty',
        'total_sold',
        'active',
        'delete',
    ];
    protected $hidden=[
        'id','product_id'
    ];
}
