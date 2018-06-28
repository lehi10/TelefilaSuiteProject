<?php

use Illuminate\Database\Seeder;
use telefilaSuite\Medico;

class AgendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicos=Medico::all();
        
        foreach ($medicos as $medico) {
            factory(telefilaSuite\Agenda::class,1)->create(["medico_id"=>$medico->id,"fecha"=>"2018-06-28"]);
        }

    }
}
