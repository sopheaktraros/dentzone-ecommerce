<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    protected $fillable =[
        'total_quantity',
        'current_total_quantity',
    ];
    protected $hidden=[
        'id','product_id'
    ];
}
