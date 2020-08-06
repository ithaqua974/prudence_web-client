<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contrat;
use App\Option;
use App\Type;
use App\Affect_option;
use Carbon\Carbon;

class ContratController extends Controller
{
    //function de crétion de devis
    public function nouveau(Request $request){
        $current_date_time = Carbon::now()->toDateTimeString();
        $devis= new Contrat;
        $devis->type_id= $request->type;
        
        $devis->montant_id=1;
        
        $devis->user_id = $request->id;
        $devis->created_at=$current_date_time;
        $devis->updated_at=$current_date_time;
        $devis->save();
        
        $devi = Contrat::select('id')->latest('id')->first();
        $options = $request->input('options');
        foreach($options as $option){
            $affect= new Affect_option;
            $affect->contrat_id = $devi->id;
            $affect->option_id = $option;
            $affect->created_at = $current_date_time;
            $affect->updated_at = $current_date_time;
            $affect->save();
        }
        

        //
        $devi = Contrat::latest('id')->first();
       //return $devi;
      // $affectation = Affect_option::where
        $options = Option::all();
        $types =Type::all();
        return view('formulaire_devis',['options'=> $options,'types'=> $types,'devi'=> $devi]);
       
    }
    

    //fonction d'affichage du formulaire de devis
    public function devis(){
        $options = Option::all();
        $types =Type::all();
        return view('formulaire_devis',['options'=> $options,'types'=> $types]);
    }
    public function update(){
        $update=1;
        $devi = Contrat::latest('id')->first();
        $options = Option::all();
        $types =Type::all();
        return view('formulaire_devis',['options'=> $options,'types'=> $types,'devi'=> $devi, 'update'=> $update]);
    }
    public function mesdevis(){
        $devis = Contrat::all();
        return view('devis',['devis'=> $devis]);
    }
}
