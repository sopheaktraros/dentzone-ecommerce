<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'slug','description','active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function permissions() {

        return $this->belongsToMany(Permission::class,'roles_permissions')->withPivot('create','update','delete','read');

    }

    public function users() {

        return $this->belongsToMany(User::class,'users_roles');

    }
}
