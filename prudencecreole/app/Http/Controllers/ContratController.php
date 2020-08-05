<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contrat;
use App\Option;
use App\Type;
use Carbon\Carbon;

class ContratController extends Controller
{
    //function de crétion de devis
    public function nouveau(Request $request){
        $current_date_time = Carbon::now()->toDateTimeString();
        $devis= new Contrat;
        $devis->type_id= $request->type;
        $devis->option_id = $request->option;
        if($request->type==1){
            if($request->option==1){
                $devis->montant_id = 1;
            }
            if($request->option==2){
                $devis->montant_id = 2;
            }
            if($request->option==3){
                $devis->montant_id = 3;
            }
            if($request->option==4){
                $devis->montant_id = 4;
            }
        }
        if($request->type==2){
            if($request->option==1){
                $devis->montant_id = 5;
            }
            if($request->option==2){
                $devis->montant_id = 6;
            }
            if($request->option==3){
                $devis->montant_id = 7;
            }
            if($request->option==4){
                $devis->montant_id = 8;
            }
        }
        if($request->type==3){
            if($request->option==1){
                $devis->montant_id = 9;
            }
            if($request->option==2){
                $devis->montant_id = 10;
            }
            if($request->option==3){
                $devis->montant_id = 11;
            }
            if($request->option==4){
                $devis->montant_id = 12;
            }
        }
        if($request->type==4){
            if($request->option==1){
                $devis->montant_id = 13;
            }
            if($request->option==2){
                $devis->montant_id = 14;
            }
            if($request->option==3){
                $devis->montant_id = 15;
            }
            if($request->option==4){
                $devis->montant_id = 16;
            }
        }
        if($request->type==5){
            if($request->option==1){
                $devis->montant_id = 17;
            }
            if($request->option==2){
                $devis->montant_id = 18;
            }
            if($request->option==3){
                $devis->montant_id = 19;
            }
            if($request->option==4){
                $devis->montant_id = 20;
            }
        }
        $montant=$devis->montant_id;
        $devis->user_id = $request->id;
        $devis->created_at=$current_date_time;
        $devis->updated_at=$current_date_time;
        $devis->save();

        //
        $devi = Contrat::latest('id')->first();
       //return $devi;
        $options = Option::all();
        $types =Type::all();
        $devis = Contrat::select('id')->latest('id')->first();
        return view('formulaire_devis',['options'=> $options,'types'=> $types,'devi'=> $devi]);
       
    }
    

    //fonction d'affichage du formulaire de devis
    public function devis(){
        $options = Option::all();
        $types =Type::all();
        return view('formulaire_devis',['options'=> $options,'types'=> $types]);
    }
}
