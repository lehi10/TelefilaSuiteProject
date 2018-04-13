<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //
    public function telefilaTarifa()
    {
        return $this->hasOne(telefilaTarifa::class);
    }
    public function citas()
    {
        return $this->hasMany(Citas::class);
    }
    public function transaccions()
    {
        return $this->hasMany(Transaccions::class);
    }

    public function controlPagos()
    {
        return $this->hasOne(controlPagos::class);
    }


    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
    public function pacientes()
    {
        return $this->belongsTo(Paciente::class);
    }
    public function especialidads()
    {
        return $this->belongsTo(Especialidad::class);
    }
}
