<?php

use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('admins.user_has_permission') as $user_permission){
            $user = \App\User::find($user_permission['user_id']);
            if ($user) {
                $user->permissions()->attach(\App\Permission::find($user_permission['permission_id']),[
                    'create'=>$user_permission['create'],
                    'update'=>$user_permission['update'],
                    'delete'=>$user_permission['delete'],
                    'read'=>$user_permission['read'],
                ]);
            }
        }
    }
}
