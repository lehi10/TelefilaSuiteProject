<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }
    public function medico()
    {
        return $this->hasOne(Medico::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }


}
