@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes Devis</div>
                <div class="panel-body">
                    @foreach ($fiches as $fiche)
                   
                    <div class="card" onclick="changerPage('/projet/{{ $fiche->id }}')">
                    
                        
                        <div class="card-body flexible">
                        
                        <p class="text-center"><b>{{$devis->->nom_projet}}</b></p><p> <small>By {{$fiche->project->prenom}} {{$fiche->project->nom}}</small></p>
                        
                        </div>
                    </div>
        
                    @endif
                    
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection