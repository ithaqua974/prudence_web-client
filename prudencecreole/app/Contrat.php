<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function sante()
    {
        return $this->hasOne('App\Sante');
    }
    public function auto()
    {
        return $this->hasOne('App\Auto');
    }
    public function habitation()
    {
        return $this->hasOne('App\Habitation');
    }

}
