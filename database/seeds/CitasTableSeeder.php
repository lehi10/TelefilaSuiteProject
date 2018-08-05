<?php

use Illuminate\Database\Seeder;
use telefilaSuite\Agenda;
use telefilaSuite\Cita;

class CitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $agenda= Agenda::find(1);
        $turnos=$agenda->turnos;
        $tiempoCita=$agenda->tiempoCita;
        $t=$agenda->horaInicio;
        $t0= new DateTime($t);
        for ($i=0; $i < $turnos; $i++) {
            $cita= new Cita;
            $cita->timestamps=false;
            $cita->fecha=now()->format("Y-m-d");
            $cita->horaInicio=$t0->format("H:i:00");
            $cita->horaFinal=$t0->modify('+'.$tiempoCita.' minutes');
            $cita->hospital_id=1;
            $cita->paciente_id=random_int(1,6);
            $cita->agenda_id=1;
            $cita->pagado=false;
            $cita->save();
        }
    }
}
