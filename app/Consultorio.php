<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    //
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
