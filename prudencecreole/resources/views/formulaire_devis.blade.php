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
                            <option value="1"{{ "1" == $devi->type ? 'selected' : '' }}>Assurance habitation</option>
                            <option value="2"{{ "2" == $devi->type ? 'selected' : '' }}>Assurance responsabilité civile</option>
                            <option value="3"{{ "3" == $devi->type ? 'selected' : '' }}>Assurance automobile</option>
                            <option value="4"{{ "4" == $devi->type ? 'selected' : '' }}>Assurance moto</option>
                            <option value="5"{{ "5" == $devi->type ? 'selected' : '' }}>Assurance vie</option>
                        </select>
                        </div>
                        <div class="form-group" name="">
                            <label for="option">Option de contrat</label>
                            <select class="form-control" name="option" id="option">
                            <option value="1"{{ "1" == $devi->option ? 'selected' : '' }}>Aucun</option>
                            <option value="2"{{ "2" == $devi->option ? 'selected' : '' }}>1 option</option>
                            <option value="3"{{ "3" == $devi->option ? 'selected' : '' }}>2 option </option>
                            <option value="4"{{ "4" == $devi->option ? 'selected' : '' }}>Toute option</option>
                            </select>
                        </div>
                        <div class="form-group" name="">
                            <input class="form-control" type="text" name="montant" value="{{ $devi->montant->montant}}" disabled>
                        </div>
                        @else
                        <label for="type">Type de contrat</label>
                        <select class="form-control" name="type" id="type">
                            <option value="1">Assurance habitation</option>
                            <option value="2">Assurance responsabilité civile</option>
                            <option value="3">Assurance automobile</option>
                            <option value="4">Assurance moto</option>
                            <option value="5">Assurance vie</option>
                        </select>
                        </div>
                        <div class="form-group" name="">
                            <label for="option">Option de contrat</label>
                            <select class="form-control" name="option" id="option">
                            <option value="1">Aucun</option>
                            <option value="2">1 option</option>
                            <option value="3">2 option </option>
                            <option value="4">Toute option</option>
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