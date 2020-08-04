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
    public function montant()
    {
        return $this->belongsTo('App\Montant');
    }
}
