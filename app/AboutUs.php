<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable=[
        'slug',
        'key_en',
        'key_kh',
        'key_en',
        'key_kh'

    ];
    protected $hidden=[
        'id'
    ];
}
