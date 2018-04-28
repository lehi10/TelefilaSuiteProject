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
        return $this->belongsTo(Paciente::class);
    }
    public function especialidads()
    {
        return $this->belongsTo(Especialidad::class);
    }
    public function administrador()
    {
        return $this->hasOne(Administrador::class);
    }
}
