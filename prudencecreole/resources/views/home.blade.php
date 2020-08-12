@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-lg-offset-2">
            <div class="card mx-sm-2 my-sm-4 bg-warning">
                <div class="card-header">
                    <div class="card-title"> Vue d'ennsemble</div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="card-title">
                        Bienvenue {{$user->prenom}} {{$user->nom}}
                    </h4>
                    <div class="card-text">
                        vous pouvez payer en ligne et activer ou desactiver les options à tout moment
                    </div>
                    <hr>
                    <div class="card-title"> Mes contrats</div>
                    <div class="card-deck">
                        @foreach ($contrats as $contrat)
                        <div class="card">
                            <div class="card-header">Contrat {{$contrat->type}}</div>
                            <div class="card-body">
                                Numéro de contrat: {{$contrat->num_contrat}}
                                <p class="card-text text-right" >
                                    {{$contrat->montant}} €
                                </p>
                            </div>
                            <div class="card-footer text-right">
                                <input class="btn btn-warning" type="submit" value="Payer">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><div class="col-md-2"></div>
    </div>

@endsection
