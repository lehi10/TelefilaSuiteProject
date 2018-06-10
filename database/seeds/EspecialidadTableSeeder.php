<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('especialidads')->insert([
            ['nombre'=>'Medicina General','tarifa'=>10],
            ['nombre'=>'Oftalmologia','tarifa'=>10],
            ['nombre'=>'Cirugia','tarifa'=>10],
            ['nombre'=>'Pediatria','tarifa'=>10],
            ['nombre'=>'Obstetricia','tarifa'=>10],
        ]);
    }
}
