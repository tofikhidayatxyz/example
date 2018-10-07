<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = "admin";
        $admin->description = "admin class";
        $admin ->save();

        $user = new Role();
        $user->name ="user";
        $user->description = "admin class";
        $user ->save();
    }
}
