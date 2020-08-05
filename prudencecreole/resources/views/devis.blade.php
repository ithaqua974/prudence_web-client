@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes Devis</div>
                <div class="panel-body">
                    @foreach ($devis as $devi)
                        @if($devi->user_id == Auth::user()->id )
                        <div class="card" >
                        <div class="card-body">
                         @if($devi->numero != null)
                         <p class="text-left">{{$devi->numero}}</p>
                        @endif
                        <p class="text-center"><b>{{$devi->type->type}}</b><br><small> {{$devi->option->option}} </small></p>
                        @if($devi->actif === 0)
                        <p class="text-right"><i>Désactivé</i></p>
                        @elseif($devi->actif == 1)
                        <p class="text-right"><i>Actif</i></p>
                         @elseif($devi->actif == null)
                        <p class="text-right"><i>En cours de traitement</i></p>
                         @endif
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