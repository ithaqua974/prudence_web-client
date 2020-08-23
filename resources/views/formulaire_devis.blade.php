@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card m-md-2 shadow">
                @if ($id==1)
                <div class="card-header">Devis assurance habitation</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="/devis/{{$id}}">
                        {{ csrf_field() }} 
                    <input type="hidden" name="id" value="{{$id}}">
                                <div class="form-group" >
                                    <label for="nb_piece">Nombre de piece</label>
                                    <input class="form-control" type="number" id="nb_piece" name="nb_piece"  >
                                </div>
                                <div class="form-group" >
                                    <label for="surface">Surface en m²</label>
                                    <input class="form-control" type="number" id="surface" name="surface"  >
                                </div>
                                <div class="form-group" >
                                    <label for="nb_piece">Propriétaire</label>
                                    <input class="form-control" type="radio" name="propriete" value="1">

                                    <label for="nb_piece">Locataire</label>
                                    <input class="form-control" type="radio" name="propriete" value="0">
                                </div>
                                <div class="form-group">
                                    <label for="option">Option de contrat </label>
                                    <br>
                                        @foreach ($options as $option)
                                            <input type="checkbox" name="options[]" value="{{$option->id}}" />
                                            <label for="checkbox">{{$option->option}}</label>
                                        @endforeach
                                </div>
                           
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Demander un devis
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
            @elseif($id==2)
            <div class="card-header">Devis assurance automobile</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="/devis/{{$id}}">
                        {{ csrf_field() }} 
                        <input type="hidden" name="id" value="{{$id}}">
                                <div class="form-group" >
                                    <label for="modele">Modele </label>
                                    <input class="form-control" type="text" id="modele" name="modele"  >
                                </div>
                                <div class="form-group" >
                                    <label for="marque">Marque</label>
                                    <input class="form-control" type="text" id="marque" name="marque"  >
                                </div>
                                <div class="form-group" >
                                    <label for="immatriculation">Immatriculation</label>
                                    <input class="form-control" type="text" id="immatriculation" name="immatriculation"  >
                                </div>
                                <div class="form-group" >
                                    <label for="chevaux">Puissance de la motorisation en chevaux</label>
                                    <input class="form-control" type="number" id="chevaux" name="chevaux"  >
                                </div>
                                <div class="form-group">
                                    <label for="option">Option de contrat </label>
                                    <br>
                                        @foreach ($options as $option)
                                            <input type="checkbox" name="options[]" value="{{$option->id}}" />
                                            <label for="checkbox">{{$option->option}}</label>
                                        @endforeach
                                </div>
                           
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Demander un devis
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>

                        @elseif($id==3)
                        <div class="card-header">Devis assurance maladie</div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="/devis/{{$id}}">
                                {{ csrf_field() }} 
                                <input type="hidden" name="id" value="{{$id}}">
                                        <div class="form-group" >
                                            <label for="nom_conjoint">Nom du conjoint</label>
                                            <input class="form-control" type="text" id="nom_conjoint" name="nom_conjoint"  >
                                        </div>
                                        <div class="form-group" >
                                            <label for="prenom_conjoint">Prénom du conjoint</label>
                                            <input class="form-control" type="text" id="prenom_conjoint" name="prenom_conjoint"  >
                                        </div>
                                        
                                        <div class="form-group" >
                                            <label for="nb_enfants">Nombre d'enfants à charge</label>
                                            <input class="form-control" type="number" id="nb_enfants" name="nb_enfants"  >
                                        </div>
                                        <div class="form-group" >
                                            <label for="option">Option de contrat</label>
                                            <br>
                                                @foreach ($options as $option)
                                                    <input type="checkbox" name="options[]" value="{{$option->id}}" />
                                                    <label for="checkbox">{{$option->option}}</label>
                                                @endforeach
                                        </div>
                                   
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-warning">
                                            Demander un devis
                                        </button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                        @endif
                        
        </div>
    </div>
</div>
@endsection