<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affect_option extends Model
{
    //
    public function option()
    {
        return $this->belongsTo('App\Option');
    }
    public function contrat()
    {
        return $this->belongsTo('App\Contrat');
    }
}
