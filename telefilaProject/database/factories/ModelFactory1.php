<?php
/*
$factory->define(telefilaSuite\Agenda::class, function (Faker\Generator $faker) {
    $ftime=$faker->time($format='H:i:s',$max='now');
    return [
        'medico_id' => function () {
             return factory(telefilaSuite\Medico::class)->create()->id;
        },
        'horaInicio_agenda' => $faker->time($format='H:i:s',$max=$ftime),
        'horaFinal_agenda' => $ftime,
        'dia_agenda' => $faker->numberBetween($min=0,$max=6),
        'disponibilidad' => $faker->boolean,
    ];
});

$factory->define(telefilaSuite\telefilaTarifa::class, function (Faker\Generator $faker) {
    return [
        'monto_telefila' => $faker->randomNumber(),
        'hospital_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },
    ];
});

$factory->define(telefilaSuite\controlPagos::class, function (Faker\Generator $faker) {
    return [
        'hospital_id' => $faker->randomNumber(),
        'telefila_tarifa_id' => $faker->randomNumber(),
    ];
});

$factory->define(telefilaSuite\Especialidad::class, function (Faker\Generator $faker) {
    return [
        'nombre_especialidad' => $faker->word,
        'tarifa_especialidad' => $faker->randomNumber(),
    ];
});

$factory->define(telefilaSuite\Transaccion::class, function (Faker\Generator $faker) {
    return [
        'cita_id' => $faker->randomNumber(),
        'agenda_id' => $faker->randomNumber(),
        'telefila_tarifa_id' => $faker->randomNumber(),
        'hospital_id' => $faker->randomNumber(),
    ];
});

$factory->define(telefilaSuite\Hospital::class, function (Faker\Generator $faker) {
    return [
        'nombre_hospital' => $faker->lastname,
        'telefono_hospital' => $faker->randomNumber($nbDigits=6),
        'direccion_hospital' => $faker->address,
    ];
});

$factory->define(telefilaSuite\Paciente::class, function (Faker\Generator $faker) {
    return [
        'nombre_paciente' => $faker->word,
        'apellido_paciente' => $faker->word,
        'dni_paciente' => $faker->word,
        'telefono_paciente' => $faker->word,
        'sexo_paciente' => $faker->word,
        'edad_paciente' => $faker->word,
        'direccion_paciente' => $faker->word,
    ];
});

$factory->define(telefilaSuite\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
    ];
});

$factory->define(telefilaSuite\Medico::class, function (Faker\Generator $faker) {
    return [
        'nombre_medico' => $faker->name,
        'apellidos_medico' => $faker->lastname,
        'sexo_medico' => 'M',
        'telefono_medico' => $faker->randomNumber($nbDigits=9),
    ];
});

$factory->define(telefilaSuite\Cita::class, function (Faker\Generator $faker) {
    return [
        'paciente_id' => $faker->randomNumber(),
        'fecha_cita' => $faker->dateTimeBetween(),
        'confirmada_cita' => $faker->boolean,
        'reservada_cita' => $faker->boolean,
        'pagada_cita' => $faker->boolean,
        'hospital_id' => $faker->randomNumber(),
    ];
});

*/