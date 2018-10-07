<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$role_admin = Role::where('name','admin')->first();
    	$role_user =  Role::where('name','user')->first();


    	$admin = new User();
    	$admin ->name =  "admin";
    	$admin ->email= "admin@gmail.com";
    	$admin ->address = "sukabumi";
    	$admin ->phone = "0984759834";
    	$admin ->province = "jabar";
    	$admin ->password = bcrypt('mazenda9999');
    	$admin ->save();
    	$admin ->roles()->attach($role_admin);



    	$user = new User();
    	$user ->name =  "user";
    	$user ->email= "user@gmail.com";
    	$user ->address = "sukabumi";
    	$user ->phone = "0984759834";
    	$user ->province = "jabar";
    	$user ->password = bcrypt('mazenda9999');
    	$user ->save();
    	$user ->roles()->attach($role_user);
        
    }
}
