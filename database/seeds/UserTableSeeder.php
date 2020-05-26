<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $highRole = Role::where('role_name', 'high')->first();
        $mediumRole = Role::where('role_name', 'medium')->first();
        $lowRole = Role::where('role_name', 'low')->first();

        $high = User::create([
            'name' => 'High Authority',
            'email' => 'high@email.com',
            'password' => Hash::make('12345678')
            ]);
        $medium = User::create([
                'name' => 'Medium Authority',
                'email' => 'medium@email.com',
                'password' => Hash::make('12345678')
                ]);

        $low = User::create([
                    'name' => 'Low Authority',
                    'email' => 'low@email.com',
                    'password' => Hash::make('12345678')
                    ]);
        
        $high->roles()->attach($highRole);
        $medium->roles()->attach($mediumRole);
        $low->roles()->attach($lowRole);
       
    }
}
