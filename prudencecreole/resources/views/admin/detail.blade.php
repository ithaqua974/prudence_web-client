@extends('layouts.dash')

@section('content')

<article class="container">
    <div class="card">
        <div class="card-header">
            {{ $user->nom }}
            {{ $user->prenom}}
        </div>
        <div class="card-body p-sm-2">
            <div>
                {{-- <div class="font-weight-bold">numéro de client:</div>{{$user->client_id}} --}}
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

            <h3 class=" card-title">contrats</h3>
            <hr>
            <form action="/update" method="post" class="form-inline">

                <div class="card-deck">
                    @foreach ($contrats as $contrat)
                    <div class="card">
                        <div class="card-header">
                            {{$contrat->type}}
                        </div>
                        <div class="card-body">
                            <div class="text-primary"> Numéro de contrat: </div>{{$contrat->num_contrat}}
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="actif-auto">
                                <label class="form-check-label" for="actif-auto">activer</label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="card-footer">
                    <input class="btn btn-warning" type="submit" value="valider">
                </div>
            </div> 
            </div>
        </form>
    
    </div>
</article>

@endsection