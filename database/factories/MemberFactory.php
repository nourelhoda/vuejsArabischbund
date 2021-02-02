<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use auth;
use App\Member;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
        return [
            'firstName' => $faker->name,
            'lastName' =>$faker->name,
            'address'  =>$faker->sentence(6),
            'email' => $faker->unique()->safeEmail,
            'Birthdate' =>  $faker->date(),
            'phoneNumber' =>$faker->name,
            'state' => 'active',
            'job' =>$faker->sentence(5),
             'user_id' =>1,
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'expierdate'=>Carbon::now()->copy()->endOfYear(),
        ];
});
