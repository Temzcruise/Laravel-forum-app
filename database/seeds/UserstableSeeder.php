<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('password'),
            'email' => 'administrator@gmail.com',
            'admin' => 1,
            'avatar' => asset('avatars/avatarPic.jpg')
        ]);

        App\User::create([
            'name' => 'Tobi Tayo',
            'password' => bcrypt('password'),
            'email' => 'tobi@gmail.com',
            'avatar' => asset('avatars/avatarPic.jpg')
        ]);

    }
}
