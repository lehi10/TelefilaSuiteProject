<?php

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
        'monto_telefila' => $faker->numberBetween($min=0,$max=100),
        'hospital_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },
    ];
});

$factory->define(telefilaSuite\controlPagos::class, function (Faker\Generator $faker) {
    return [
        'hospital_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },
        'telefila_tarifa_id' => function () {
             return factory(telefilaSuite\telefilaTarifa::class)->create()->id;
        },
    ];
});

$factory->define(telefilaSuite\Especialidad::class, function (Faker\Generator $faker) {
    return [
        'nombre_especialidad' => $faker->words($nb=1,$asText=true),
        'tarifa_especialidad' => $faker->numberBetween($min=0,$max=100),
        /*
        'medico_id' => function () {
             return factory(telefilaSuite\Medico::class)->create()->id;
        },
        'hospital_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },*/
    ];
});

$factory->define(telefilaSuite\Transaccion::class, function (Faker\Generator $faker) {
    return [
        'cita_id' => function () {
             return factory(telefilaSuite\Cita::class)->create()->id;
        },
        'agenda_id' => function () {
             return factory(telefilaSuite\Agenda::class)->create()->id;
        },
        'telefila_tarifa_id' => function () {
             return factory(telefilaSuite\telefilaTarifa::class)->create()->id;
        },
        'hospital_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },
    ];
});

$factory->define(telefilaSuite\Hospital::class, function (Faker\Generator $faker) {
    return [
        'nombre_hospital' => $faker->lastname,
        'telefono_hospital' => $faker->randomNumber($nbDigits=6),
        'direccion_hospital' => $faker->address,
        /*
        'medicos_id' => function () {
             return factory(telefilaSuite\Medico::class)->create()->id;
        },
        'pacientes_id' => function () {
             return factory(telefilaSuite\Paciente::class)->create()->id;
        },
        'especialidads_id' => function () {
             return factory(telefilaSuite\Especialidad::class)->create()->id;
        },*/
    ];
});

$factory->define(telefilaSuite\Paciente::class, function (Faker\Generator $faker) {
    return [
        'nombre_paciente' => $faker->firstname,
        'apellido_paciente' => $faker->word,
        'dni_paciente' => $faker->word,
        'telefono_paciente' => $faker->word,
        'sexo_paciente' => $faker->word,
        'edad_paciente' => $faker->word,
        'direccion_paciente' => $faker->word,
        /*
        'hospitals_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },*/
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
        'nombre_medico' => $faker->word,
        'apellidos_medico' => $faker->word,
        'sexo_medico' => $faker->randomElement($array=array('M','F')),
        'telefono_medico' => $faker->randomNumber($nbDigits=9),
        /*
        'especialidads_id' => function () {
             return factory(telefilaSuite\Especialidad::class)->create()->id;
        },
        'hospitals_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },*/
    ];
});

$factory->define(telefilaSuite\Cita::class, function (Faker\Generator $faker) {
    return [
        'paciente_id' => function () {
             return factory(telefilaSuite\Paciente::class)->create()->id;
        },
        'fecha_cita' => $faker->dateTimeBetween(),
        'confirmada_cita' => $faker->boolean,
        'reservada_cita' => $faker->boolean,
        'pagada_cita' => $faker->boolean,
        'hospital_id' => function () {
             return factory(telefilaSuite\Hospital::class)->create()->id;
        },
    ];
});

