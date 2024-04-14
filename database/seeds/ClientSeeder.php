<?php

use App\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Client',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('user');
    }
}
