<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Role;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telepon' => $faker->e164PhoneNumber,
        'alamat' => $faker->address,
        'email_verified_at' => now(),
        'password' => bcrypt(12345),
        'remember_token' => Str::random(10),
        'nik' => $faker->nik,
        'pos' => $faker->postcode,
        'kota' => $faker->city,
        'tanggalLahir' => now(),
        'tempatLahir' => $faker->city,
        'jenisKelamin' => '',
    ];
});

$factory->afterCreating(User::class, function ($user, $faker) {
    $roles = Role::where('name', 'user')->get();
    $user->roles()->sync($roles->pluck('id')->toArray());
});
