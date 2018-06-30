<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
    protected $guarded=[];

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
    public function hospitals()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function consultorio()
    {
        return $this->hasOne(Consultorio::class);
    }

    public function getTurnos()
    {
        $turno=Agenda::where('medico_id',$this->id)->where('fecha',now()->format("Y-m-d"))->pluck("turnos")->first();
        if ($turno)
            return $turno;
        return 0;
    }
    //Observar
    //Espacio para referenciar a citas o usar agendas
}
