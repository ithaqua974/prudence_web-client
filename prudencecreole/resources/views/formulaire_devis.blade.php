@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Devis</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('devis') }}">
                        {{ csrf_field() }} 
                        <div class="form-group">
                        @if(@isset($devi))
                        <label for="type">Type de contrat</label>
                        <select class="form-control" name="type" id="type">
     
                            @foreach ($types as $type)
                                <option value="{{$type->id}}" {{ $type->id == $devi->type_id ? 'selected' : '' }}>{{$type->type}}</option>
                   
                            @endforeach
                           </select>
                        </div>
                        <div class="form-group" name="">
                            <label for="option">Option de contrat</label>
                            <select class="form-control" name="option" id="option">
                      
                                @foreach ($options as $option)
                                    <option value="{{$option->id}}"{{ $option->id == $devi->option_id ? 'selected' : '' }}>{{$option->option}}</option>
                          
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group" name="">
                            <input class="form-control" type="text" name="montant" value="{{ $devi->montant->montant}}" disabled>
                        </div>
                        @else
                        <label for="type">Type de contrat</label>
                        <select class="form-control" name="type" id="type">
                            @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                       @endforeach
                        </select>
                        </div>
                        <div class="form-group" name="">
                            <label for="option">Option de contrat</label>
                            <select class="form-control" name="option" id="option">
                                @foreach ($options as $option)
                                <option value="{{$option->id}}">{{$option->option}}</option>
                               @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Demander un devis
                                </button>
                            </div>
                        </div>
                        @endif
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection