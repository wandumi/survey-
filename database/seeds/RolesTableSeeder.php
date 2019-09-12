<?php

use App\roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'administrator of the site', 
        ]);

        DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'User of the site', 
        ]); 

        // public function run()
        // {
        //     $roles = [
        //         'SuperAdmin',
        //         'Admin',
        //         'Manager',
        //         'User',
        //     ];
    
    
        //     foreach ($roles as $role) {
        //         Role::create(['name' => $role]);
        //  }

         //seed this permission table with the following artisan command
         //$php artisan db:seed --class=RolesTableSeeder
    // }    
    }
}
