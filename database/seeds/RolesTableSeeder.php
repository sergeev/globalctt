<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::truncate();

    	Role::create(['name' => 'admin']);
    	Role::create(['name' => 'director']);
    	Role::create(['name' => 'manager']);
    	Role::create(['name' => 'redactor']);
    	Role::create(['name' => 'user']);
    }
}
