<?php

use Illuminate\Database\Seeder;

class ConsultoriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(telefilaSuite\Consultorio::class,30)->create();
    }
}
