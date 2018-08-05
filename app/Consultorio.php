<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    //
    protected $guarded=[];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
