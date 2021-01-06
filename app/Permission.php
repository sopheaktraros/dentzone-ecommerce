<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug','description','active','delete'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function roles() {

        return $this->belongsToMany(Role::class,'roles_permissions')->withPivot('create','update','delete','read');

    }

//    public function users() {
//
//        return $this->belongsToMany(User::class,'users_permissions');
//
//    }
}
