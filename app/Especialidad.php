<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    public function medicos()
    {
        return $this->hasMany(Medico::class);
    }

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }
    public function consultorios()
    {
        return $this->hasMany(Consultorio::class);
    }
}
