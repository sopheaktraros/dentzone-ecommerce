<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $fillable =[
        'setting_name_en',
        'setting_name_kh',
        'setting_value_en',
        'setting_value_kh',
    ];
    protected $hidden=[
        'id'
    ];
}
