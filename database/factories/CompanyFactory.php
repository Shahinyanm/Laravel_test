<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name'               =>$faker->unique()->company,
        'country'            =>$faker->country,
        'city'               =>$faker->city,
        'street'             =>$faker->streetName,
        'number'             =>$faker->streetAddress,
        'post'               =>$faker->postcode,
        'company_type_id'    => \App\CompanyType::inRandomOrder()->first()->id,
        'currency_id'        => \App\Currency::inRandomOrder()->first()->id,
    ];
});
