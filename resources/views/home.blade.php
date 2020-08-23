@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-lg-offset-2">
            <div class="card mx-sm-2 my-sm-4 shadow-lg">
                <div class="card-header">
                    <h3 class="card-title"> Vue d'ennsemble</h3>
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
                    <h5 class="card-title"> Mes contrats</h5>
                    <div class="card-deck">
                        @foreach ($contrats as $contrat)
                        <div class="card shadow">
                            <div class="card-header">Contrat {{$contrat->type}}</div>
                            <div class="card-body">
                                Numéro de contrat: {{$contrat->num_contrat}}
                                <p class="card-text text-right" >
                                    {{$contrat->montant}} €
                                    {{-- @if({$contrat->updated_at}>=) --}}
                                </p>
                            </div>
                            <div class="card-footer text-right">
                            <a href="/detail/{{$contrat->type}}" class="btn btn-info" type="button" >détail</a>
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
