<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' =>'Admin',
            'email'=>'admin@admin.com',
            'password'=> '$2y$10$eFvR4mvMZHJmzjaEhbHxAuQ7NWobdmis0VMLnFWGVojerQADnwuFi',  //secret
            'type' => \App\User::ADMIN,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
