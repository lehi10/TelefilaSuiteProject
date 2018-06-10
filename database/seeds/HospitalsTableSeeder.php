<?php

use Illuminate\Database\Seeder;
use telefilaSuite\Hospital;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(telefilaSuite\Hospital::class,6)->create();
    }
}
