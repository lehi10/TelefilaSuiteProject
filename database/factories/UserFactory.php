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


// $factory->define(telefilaSuite\Paciente::class, function (Faker $faker) { 
//     return  [ 
//         'nombre' => $faker->firstname, 
//         'apellido' => $faker->lastname, 
//         'dni' => $faker->dni, 
//         'departamento' => $faker->state, 
//         'ciudad'=>$faker->city,
//         'edad'=>random_int(10,40),
//         'edad' => $faker->numberBetween(10,50),
//         'sis' => $faker->boolean, 
//         'sexo' => $faker->boolean, 
//         'celular' => $faker->randomNumber($nbDigits=9),
//         //'direccion' => $faker->address,

//     ]; 
// }); 

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

$factory->define(telefilaSuite\Consultorio::class,function(Faker $faker){
    return[
        'nombre' => $faker->word,
        'pedestal'=>$faker->boolean,
        'especialidad_id' =>$faker->numberBetween(1,5),
        'user_id' =>$faker->randomElement([7,8]),
        'hospital_id'=>1,

    ];
});

$factory->define(telefilaSuite\Agenda::class,function(Faker $faker){
    $today=now();
    $t0=$faker->dateTimeBetween($min='06:00:00',$max='10:00:00')->format("H:00:00");
    $t0f=new DateTime($t0);
    $tf=$faker->dateTimeBetween($min=$t0f,$max='23:59:59')->format("H:00:00");
    $tff=new DateTime($tf);
    $tiempo=$faker->numberBetween(1,20);
    $m=5-$tiempo%5;
    $tiempo=$tiempo+$m;
    $diff=$tff->diff($t0f);
    $diff=$diff->h*60+$diff->i;
    $turnos=$diff/$tiempo;
    return[
        'fecha' => $today->format("Y-m-d"),
        'horaInicio'=>"7:00:00",
        'horaFinal'=>"17:15:00",
        'tiempoCita' =>30,
        'turnos' =>20,
        'dia'=>$today->format('d'),

    ];
});


$factory->define(telefilaSuite\Paciente::class,function(Faker $faker){
    #$today=now();
    
    return[
        'nombres' => $faker->firstname,
        'apellidos' => $faker->firstname,
        'dni'=>$faker->dni,
        'departamento'=>"Arequipa",
        'ciudad'=>"Arequipa",
        'edad' =>$faker->numberBetween(15,19),
        'sis'=>$faker->boolean,
        'sexo'=>$faker->boolean,
    ];
});