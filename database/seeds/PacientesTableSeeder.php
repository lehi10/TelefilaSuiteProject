<?php

use Illuminate\Database\Seeder;
use telefilaSuite\Hospital;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $hospitales=Hospital::all();
        foreach ($hospitales as $hospital) {
            factory(telefilaSuite\Paciente::class,6)->create(["hospital_id"=>$hospital->id]);  
        }

    }
}
