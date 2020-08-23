@extends('layouts.app')

@section('content')



<div class="row my-md-4">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                .row
                Contrat {{$contrats->type}}
            </div>
            <div class="card-body">
                Numéro de contrat: {{$contrats->num_contrat}}
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-1">
                        <form action="" method="post">
                            <input class="btn btn-danger" type="submit" value="Résilier">                    
                        </form>
                    </div>
                    <div class="col-md-1">
                        <form action="" method="post">
                            <input class="btn btn-success" type="submit" value="Payer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection