<?php


namespace App\Traits;


use App\Permission;

trait HasPermissions
{
    /**
     * @return mixed
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'users_permissions')->withPivot('create','update','delete','read');
    }

    /**
     * @param $permission
     * @param null $action
     * @return bool
     */
    public function hasPermission($permission,$action=null)
    {
        $has_permission = $this->permissions()->whereSlug($permission)->first();
        if ($action!=null || $action!='') {
            if ($has_permission && $has_permission->pivot->{$action}===1) {
                return true;
            }
            else{
                return false;
            }
        }
        return (bool) $has_permission?$has_permission->count():0;
    }

    /**
     * @param $permission
     * @param null $action
     * @return bool
     */
    public function hasPermissionThroughRole($permission,$action=null)
    {
        $has_permission = Permission::whereSlug($permission)->first();
        if ($has_permission) {
           foreach ($has_permission->roles as $role){
               if($this->roles->contains($role)) {
                   $has_role_permission = $role->permissions()->whereSlug($permission)->first();
                   if ($has_role_permission) {
                       if ($action!=null || $action!='') {
                           return (bool) $has_role_permission->pivot->{$action};
                       }
                       return true;
                   }
               }
           }
        }
        return false;
    }

    /**
     * @param $permission
     * @param null $action
     * @return bool
     */
    public function hasPermissionTo($permission,$action=null)
    {
        return $this->hasPermissionThroughRole($permission,$action) || $this->hasPermission($permission,$action);
    }

    /**
     * @param array $permissions
     * @return mixed
     */
    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('slug',$permissions)->get();
    }

    /**
     * @param mixed ...$permissions
     * @return $this
     */
    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    /**
     * @param mixed ...$permissions
     * @return $this
     */
    public function deletePermissions(... $permissions )
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    /**
     * @param mixed ...$permissions
     * @return HasPermissions
     */
    public function refreshPermissions(... $permissions )
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }

}
