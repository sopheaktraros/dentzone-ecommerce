<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStockImport extends Model
{
    protected $fillable =[
        'uuid',
        'sku',
        'unit_price',
        'quantity',
        'create_by',
        'update_by',
    ];
    protected $hidden=[
        'id','product_id','product_item_id'
    ];
}
