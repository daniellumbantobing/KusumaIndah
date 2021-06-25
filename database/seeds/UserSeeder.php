<?php

use App\User;
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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'tanggal_lahir' => '2000-06-09',
            'alamat' => 'Tarutung',
            'no_hp' => '08124343',
            'password' => bcrypt('12345')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Daniel',
            'email' => 'daniel@test.com',
            'tanggal_lahir' => '2000-06-09',
            'alamat' => 'Tarutung',
            'no_hp' => '08124343',
            'password' => bcrypt('12345')
        ]);
        $user->assignRole('user');
    }
}