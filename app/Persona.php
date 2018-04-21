<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['id', 'nombre','apellido','dni','telefono','sexo','edad','direccion','create_at','update_at'];

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
