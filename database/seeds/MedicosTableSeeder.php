<?php

use Illuminate\Database\Seeder;

class MedicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker\Factory::create('es_PE');
        $j=1;
        for ($i=1; $i <= 9; $i++) { 
            $user= new telefilaSuite\Medico;
            $user->especialidad_id=$j;
            $user->nombres=$faker->firstname;
            $user->apellidos=$faker->lastname;
            $user->cmp=$faker->dni;
            $user->hospital_id=1;
            $user->save();
            if ($i%2==0)
                $j++;

        }
    }
}
