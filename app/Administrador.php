<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['id', 'usuario','password','hospital_id','create_at','update_at'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
