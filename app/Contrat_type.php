<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat_type extends Model
{
    public function contrat()
    {
        return $this->belongsTo('App\Contrat');
    }
}
