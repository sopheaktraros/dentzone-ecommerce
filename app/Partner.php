<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable =[

        'name_en',
        'name_kh',
        'logo',
        'contact_number',
        'email',
        'url',
        'type',
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
