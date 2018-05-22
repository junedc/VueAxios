<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{


    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        factory(\App\User::class, 18)->create();
    }
}
