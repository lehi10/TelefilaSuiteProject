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
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
    public function hospitals()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function consultorios()
    {
        return $this->hasMany(Consultorio::class);
    }
    //Observar
    //Espacio para referenciar a citas o usar agendas
}
