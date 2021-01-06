<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItemOption extends Model
{
    protected $fillable =[
        'uuid',
        'key',
        'value',
        'image',
        'create_by',
        'update_by',
        'active',
        'delete',
    ];
    protected $hidden=[
        'id','product_item_id','product_attribute_id','product_attribute_value_id'
    ];
}
