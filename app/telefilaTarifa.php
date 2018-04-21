<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class telefilaTarifa extends Model
{
    //
    public function hospital()
    {
        return $this->belongsTo('telefilaSuite\Hospital');
    }
    public function controlPago()
    {
        return $this->hasOne(controlPago::class);
    }
    public function transaccions()
    {
        return $this->hasMany(Transaccion::class);
    }
}
