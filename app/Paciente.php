<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public function citas()
    {
        return $this->hasMany(Paciente::class);
    }
    public function hospitals()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}