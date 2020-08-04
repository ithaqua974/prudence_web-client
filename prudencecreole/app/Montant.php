<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Montant extends Model
{
    //
    public function contrat()
    {
        return $this->hasOne('App\Contrat');
    }
}
