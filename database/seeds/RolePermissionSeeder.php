<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('admins.role_has_permissions') as $role=>$permissions){
            $role = Role::whereSlug($role)->whereActive(1)->first();
            if ($role) {
                foreach($permissions as $permission=>$data){
                    $role->permissions()->attach(Permission::whereSlug($permission)->whereActive(1)->first(),$data);

                }
            }
        }
    }
}
