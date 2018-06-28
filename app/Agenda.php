<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //
    public $timestamps=false;
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    public function transaccions()
    {
        return $this->hasOne(Transaccion::class);
    }
    
}
