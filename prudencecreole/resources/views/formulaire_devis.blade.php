@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card m-md-2 shadow">
                <div class="card-header">Devis</div>
                <div class="card-body">
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
                            
                                @foreach ($options as $option)
                                    <input type="checkbox" name="options[]" value="{{$option->id}}" {{ $option->id == $devi->option_id ? 'checked' : '' }}/>
                                    <label for="checkbox">{{$option->option}}</label>
                                @endforeach
                                
                            
                        </div>
                            @if(empty($update))
                                <div class="form-group" name="">
                                    <input class="form-control" type="text" name="montant" value="{{ $devi->montant->montant}}" disabled>
                                </div>
                            @endif
                        @else
                        <label for="type">Type de contrat</label>
                        <select class="form-control" name="type" id="type">
                            @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                       @endforeach
                        </select>
                        </div>
                        <div class="form-group" name="">
                            <label for="option">Option de contrat </label>
                            <br>
                                @foreach ($options as $option)
                                    <input type="checkbox" name="options[]" value="{{$option->id}}" />
                                    <label for="checkbox">{{$option->option}}</label>
                                @endforeach
                        </div>
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            @if(isset($update))
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Mettre à jour mes options
                                </button>
                            </div>
                            @else
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Demander un devis
                                </button>
                            </div>
                            @endif
                        </div>
                        @endif
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection