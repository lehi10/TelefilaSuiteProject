<?php

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

$factory->define(telefilaSuite\User::class, function (Faker $faker) {
    $us=$faker->unique()->numberBetween(2,6);
    return [
        'username' => "admin".$us,
        'email' => "admin".$us."@mail.com",
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'rol'=>1,
        //'remember_token' => str_random(10),
    ];
});

$factory->define(telefilaSuite\Hospital::class, function (Faker $faker) {  
    return [  
        'nombre' => $faker->lastname,  
        'ruc'=>$faker->randomNumber($nbDigits=8), 
        'director'=>$faker->name, 
        'ciudad'=>$faker->city, 
        'region'=>$faker->state, 
        'telefono' => $faker->randomNumber($nbDigits=6),  
        'direccion' => $faker->address,  
        'personaContacto'=>$faker->name 
         
    ];  
}); 