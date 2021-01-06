<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        'uuid',
        'slug',
        'name',
        'gender',
        'phone',
        'email',
        'image_profile',
        'avatar',
        'remark',
        'phone_verify',
        'email_verify',
        'create_by',
        'update_by',
        'active',
        'delete',
        'date_sign_up'
    ];
    protected $hidden=[
        'id','username','password'
    ];
}
