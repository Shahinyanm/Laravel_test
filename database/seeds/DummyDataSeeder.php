<?php

use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1000)->create()->each(function ($user) {
            $companies = factory(App\Company::class,100)->make();
            $user->companies()->saveMany($companies);
        });
    }
}
