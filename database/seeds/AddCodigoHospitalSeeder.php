<?php

use Illuminate\Database\Seeder;
use telefilaSuite\Hospital;

function limpiarCaracteresEspeciales($string ){
    $string = htmlentities($string);
    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
    return $string;
}


class AddCodigoHospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $hospitals=Hospital::all();
        foreach ($hospitals as $hospital) {
            $codigo=mb_substr($hospital->nombre,0,2,'UTF-8').$hospital->id.substr($hospital->ruc,-4);
            $hospital->codigo= strtolower(limpiarCaracteresEspeciales($codigo));
            $hospital->save();
        }

    }
}
