<?php

use Illuminate\Database\Seeder;
use telefilaSuite\Rol;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $r1=new Rol;
        $r1->nombre="Super Usuario";
        $r1->url="superuser";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Administrador";
        $r1->url="administrador";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Caja";
        $r1->url="caja";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Admision";
        $r1->url="admision";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Recursos Humanos";
        $r1->url="recursosHumanos";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Historial Medico";
        $r1->url="historialMedico";
        $r1->save();
    }
}
