<?php

use App\Permission;
use App\Role;
use App\User;
use App\UserPermission;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert(config('admins.user'));

        foreach (User::all() as $user){
            $user->password = bcrypt($user->username);
            $user->save();
            foreach (config('admins.user_roles') as $user_role){
                if ($user_role['user_id']===$user->id) {
                    $user->roles()->attach($user_role['role_id']);
                }
            }
        }
    }
}
