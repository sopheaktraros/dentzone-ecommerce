<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscript extends Model
{
    protected $fillable =[
        'uuid',
        'email',
        'active',
        'delete',
    ];
    protected $hidden=[
        'id',
    ];
}
