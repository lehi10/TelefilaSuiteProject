<?php

namespace telefilaSuite;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
