<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $fillable =[
        'question_en',
        'question_kh',
        'answer_en',
        'answer_kh',
        'slug',
        'create_by',
        'update_by',
        'active',
        'delete'
    ];
    protected $hidden=[
        'id'
    ];
}
