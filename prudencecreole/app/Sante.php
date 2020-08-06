<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sante extends Model
{
    //
    public function contrat()
    {
        return $this->belongsTo('App\Contrat');
    }

}
