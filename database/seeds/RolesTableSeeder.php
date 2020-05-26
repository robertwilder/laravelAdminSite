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

        Role::create(['role_name' => 'low']);
        Role::create(['role_name' => 'medium']);
        Role::create(['role_name' => 'high']);

    }
}
