<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingsSeeder::class);
        $this->call(AdminNavigationSeeder::class);
        $this->call(UserGroupSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserPermissionSeeder::class);
        $this->call(LocationsSeeder::class);
        $this->call(LocationDeliveriesSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(CustomerAddressSeeder::class);

    }
}
