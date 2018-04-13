<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    //
    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function telefilaTarifa()
    {
        return $this->belongsTo(telefilaTarifa::class);
    }
}
