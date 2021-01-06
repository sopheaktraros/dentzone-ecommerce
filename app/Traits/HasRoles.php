<?php


namespace App\Traits;


use App\Role;

trait HasRoles
{

    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }

    /**
     * @param mixed ...$roles
     * @return bool
     */
    public function hasRole(... $roles )
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }
}
