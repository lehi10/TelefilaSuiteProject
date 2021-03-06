<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //protected $fillable = ['id', 'nombre','ruc', 'director','direccion', 'ciudad','pais','telefono','personaContacto','clave','usuario','create_at','update_at'];
    protected $guarded=[]; //Solo se escriben las excepciones y ya no hayq ue poner todos los campos en fillable
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
        return $this->hasMany(Paciente::class);
    }
    public function especialidads()
    {
        return $this->belongsToMany(Especialidad::class);
    }
    public function administrador()
    {
        return $this->hasOne(Administrador::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function consultorios()
    {
        return $this->hasMany(Consultorio::class);
    }
}
