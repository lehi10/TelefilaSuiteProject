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
        $r1->nombre="superUser";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Administrador";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Caja";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Admision";
        $r1->save();
        $r1=new Rol;
        $r1->nombre="Recursos Humanos";
        $r1->save();
    }
}
