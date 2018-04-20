<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
