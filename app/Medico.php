<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
    public function especialidads()
    {
        return $this->belongsTo(Especialidad::class);
    }
    public function hospitals()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    //Observar
    //Espacio para referenciar a citas o usar agendas
}
