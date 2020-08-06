<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Contrat;
use App\Option;
use App\Type;
use App\Affect_option;
use App\Habitation;
use App\Auto;
use App\Sante;
use Carbon\Carbon;

class ContratController extends Controller
{
    //function de crétion de devis
    public function nouveau(Request $request, $id){
        $current_date_time = Carbon::now()->toDateTimeString();
        $devis= new Contrat;
        $devis->type_id= $id;
        $devis->montant_id=1;
        $devis->user_id =Auth::user()->id;;
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
        if($id==1){
            $habitation= new Habitation;
            $habitation->contrat_id = $devi->id;
            $habitation->nb_piece = $request->nb_piece;
            $habitation->surface = $request->surface;
            $habitation->propriete = $request->propriete;
            $habitation->created_at = $current_date_time;
            $habitation->updated_at = $current_date_time;
            $habitation->save();
        }elseif($id==2){
            $automobile= new Auto;
            $automobile->contrat_id = $devi->id;
            $automobile->modele = $request->modele;
            $automobile->marque = $request->marque;
            $automobile->immatriculation = $request->immatriculation;
            $automobile->chevaux = $request->chevaux;
            $automobile->created_at = $current_date_time;
            $automobile->updated_at = $current_date_time;
            $automobile->save();
        }elseif($id==3){
            $maladie= new Sante;
            $maladie->contrat_id = $devi->id;
            $maladie->nom_conjoint = $request->nom_conjoint;
            $maladie->prenom_conjoint = $request->prenom_conjoint;
            $maladie->nb_enfants = $request->nb_enfants;
            $maladie->created_at = $current_date_time;
            $maladie->updated_at = $current_date_time;
            $maladie->save();
        }
        
       return 'success';

       
    }
    

    //fonction d'affichage du formulaire de devis
    public function devis($id){
        $options = Option::all();
        $types =Type::all();
        return view('formulaire_devis',['options'=> $options,'types'=> $types,'id'=>$id]);
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
