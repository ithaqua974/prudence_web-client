@extends('layouts.dash')

@section('content')

<article class="container">
<div class="card">
    <div class="card-header">
        {{ $user->nom }}
        {{ $user->prenom}}
    </div>
    <div class="card-body">
        <div>
            numéro de client: {{$user->client_id}}
        </div>
        <div>
            Adresse: {{$user->adresse}}
        </div>
        <div>
            Email: {{$user->email}}
        </div>
        <div>
            Téléphone: {{$user->telephone}}
        </div>
    
<div class="card">
    <div class="card-header">contrats</div>
    <div class="card-body">
        <div class="card-deck">
            <form action="/update" method="post">
                <div class="card">
                  <div class="card-header">Essentiel auto</div>
                    <div class="card-body">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="actif-auto">
                            <label class="form-check-label" for="actif-auto">activer</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Sérénité Habitat</div>
                    <div class="card-body">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="actif-habitat">
                            <label class="form-check-label" for="actif-habitat">activer</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Plénitude santé</div>
                    <div class="card-body">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="actif-santé">
                            <label class="form-check-label" for="actif-santé">activer</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input class="btn btn-warning" type="submit" value="valider">
        </div>
    </form>
</div>
    </div>
</div>
</article>

@endsection