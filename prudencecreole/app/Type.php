<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $fillable = ['role'];
    
    //
    public function contrat()
    {
        return $this->hasOne('App\Contrat');
    }
}
