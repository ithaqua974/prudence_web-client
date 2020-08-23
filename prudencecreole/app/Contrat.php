<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'users_has_contrat', 'contrat_id', 'user_id');
    }

    public function contrat_types()
    {
        return $this->belongsToMany('App\Contrat_type');
    }
}
