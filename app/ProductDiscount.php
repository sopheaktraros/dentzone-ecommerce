<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
    protected $fillable =[
        'uuid',
        'discount',
        'start_date',
        'end_date',
        'create_by',
        'update_by',
        'active',
        'delete',
        'date_sign_up'
    ];
    protected $hidden=[
        'id','product_id'
    ];
}
