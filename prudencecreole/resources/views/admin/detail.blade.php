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
                  <div class="card-header">essentiel auto</div>
                    <div class="card-body">
                        <label for="actif_auto"></label>
                        <input type="checkbox" name="actif_auto" id="actif_auto">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Sérénité Habitat</div>
                    <div class="card-body">
                        <label for="actif_habitat"></label>
                        <input type="checkbox" name="actif_habitat" id="actif_habitat">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Plénitude santé</div>
                    <div class="card-body">
                        <label for="actif_sauté"></label>
                        <input type="checkbox" name="actif_santé" id="actif_santé">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer"></div>
</div>
    </div>
</div>
</article>

@endsection