<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    public function medicos()
    {
        return $this->belongsTo(Medico::class);
    }

    public function hospitals()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function consultorios()
    {
        return $this->hasMany(Consultorio::class);
    }
}
