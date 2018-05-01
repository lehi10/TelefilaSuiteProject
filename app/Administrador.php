<?php

namespace telefilaSuite;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Administrador extends Authenticatable
{

    use Notifiable;
    protected $guard = 'auth:administrador';
    protected $fillable = ['id', 'usuario','password','hospital_id','create_at','update_at','remember_token'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
