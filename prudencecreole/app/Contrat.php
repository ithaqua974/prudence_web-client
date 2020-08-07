<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function montant()
    {
        return $this->belongsTo('App\Montant');
    }
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function affect_option()
    {
        return $this->hasMany('App\Affect_option');
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
