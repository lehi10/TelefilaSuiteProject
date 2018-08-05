<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['id', 'nombre','apellido','dni','departamento','ciudad','edad','sis','sexo','celular','hospital_id','create_at','update_at'];
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function especialidads()
    {
        return $this->belongsToMany(Especialidad::class);
    }
}
