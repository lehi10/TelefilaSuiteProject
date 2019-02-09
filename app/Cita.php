<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    protected $fillable = ['id', 'fecha','horaInicio','horaFinal','paciente_id','hospital_id','agenda_id','pagado','create_at','update_at'];
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

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
    public function consultorio()
    {
        return $this->hasOne(Consultorio::class);
    }
}
