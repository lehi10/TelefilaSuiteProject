<?php

namespace telefilaSuite;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $guard = 'default';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'password','remember_token',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }



    public function consultorios()
    {
        return $this->hasMany(Consultorio::class);
    }

    public function tieneRol($rol)
    {
        if ($this->rol_id=="1")
            return True;
        return $this->rol->nombre==$rol;
    }

    public function rolUrl()
    {
        return $this->rol->url;
    }


}
