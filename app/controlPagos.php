<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class controlPagos extends Model
{
    //
    // Observar
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }



    public function telefilaTarifa()
    {
        return $this->belongsTo(telefilaTarifa::class);
    }
    

}
