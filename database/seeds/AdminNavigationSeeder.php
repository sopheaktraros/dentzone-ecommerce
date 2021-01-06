<?php

use App\AdminNavigation;
use Illuminate\Database\Seeder;

class AdminNavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminNavigation::insert(config('admins.navigations'));
    }
}
