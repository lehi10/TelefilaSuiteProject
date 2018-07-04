<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PacientesTableSeeder::class,
            HospitalsTableSeeder::class,
            RolsTableSeeder::class,
            UsersTableSeeder::class,
            EspecialidadTableSeeder::class,
            MedicosTableSeeder::class,
            ConsultoriosTableSeeder::class,
            AgendasTableSeeder::class,
            CitasTableSeeder::class,
            ]);


    }
}
