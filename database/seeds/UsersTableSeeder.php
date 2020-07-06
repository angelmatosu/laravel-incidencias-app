<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        User::create([
            'name' => 'Angel',
            'email' => 'matos.angel@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 0
        ]);

        //Support
        User::create([
            'name' => 'María',
            'email' => 'support@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1
        ]);

        //Client
        User::create([
            'name' => 'Claudia',
            'email' => 'client@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 2
        ]);
    }
}
