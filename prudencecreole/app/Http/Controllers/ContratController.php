<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contrat;
use Carbon\Carbon;

class ContratController extends Controller
{
    //function de crétion de devis
    public function nouveau(Request $request){
        $current_date_time = Carbon::now()->toDateTimeString();
        $devis= new Contrat;
        $devis->type= $request->type;
        $devis->option = $request->option;
        $devis->montant = $request->montant;
        $devis->user_id = $request->id;
        $devis->created_at=$current_date_time;
        $devis->updated_at=$current_date_time;
        $fiche->save();
        
    }
}
