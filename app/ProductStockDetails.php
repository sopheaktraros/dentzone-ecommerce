<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStockDetails extends Model
{
    protected $fillable =[
        'uuid',
        'sku',
        'unit_price',
        'quantity',
        'current_quantity',
        'create_by',
        'update_by',
    ];
    protected $hidden=[
        'id','product_id','product_item_id'
    ];
}
