<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    public function affect_option()
    {
        return $this->hasOne('App\Affect_option');
    }
}
