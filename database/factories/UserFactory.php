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


$factory->define(telefilaSuite\Paciente::class, function (Faker $faker) { 
    return  [ 
        'nombre' => $faker->firstname, 
        'apellido' => $faker->lastname, 
        'dni' => $faker->dni, 
        'departamento' => $faker->state, 
        'ciudad'=>$faker->city,
        'edad'=>random_int(10,40),
        'edad' => $faker->numberBetween(10,50),
        'sis' => $faker->boolean, 
        'sexo' => $faker->boolean, 
        'celular' => $faker->randomNumber($nbDigits=9),
        //'direccion' => $faker->address,

    ]; 
}); 

$factory->define(telefilaSuite\User::class, function (Faker $faker) {
    $nom=$faker->username;
    return [
        'username' => $nom,
        'email' => $nom.'@mail.com',
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'rol'=>1,
        'hospital_id'=>1,
        'persona_id'=>function () { 
            return factory(telefilaSuite\Persona::class)->create()->id; 
       }, 
        'estado' => 1,
        
        //'remember_token' => str_random(10),
    ];
});

$factory->define(telefilaSuite\Hospital::class, function (Faker $faker) {  
    return [  
        'nombre' => $faker->lastname,  
        'ruc'=>$faker->randomNumber($nbDigits=8), 
        'nombrePersona'=>$faker->name,
        'emailPersona'=>$faker->email,
        'telefono'=>$faker->phoneNumber,
        'celularPersona'=>$faker->phoneNumber,
        'direccion' => $faker->streetAddress,  
        'ciudad'=>$faker->city, 
        'region'=>$faker->state, 
        'fechaInicio'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'tarifa'=>10,
        'estado'=> 1,
        'licenciaAnual'=>0
    ];  
}); 

