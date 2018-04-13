<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function transaccion()
    {
        return $this->hasOne(Transaccion::class);
    }
}
