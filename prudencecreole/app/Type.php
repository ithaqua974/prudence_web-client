<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function contrat()
    {
        return $this->hasOne('App\Contrat');
    }
}
