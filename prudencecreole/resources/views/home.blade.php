@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-header">Habitation</div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                        <div class="card">
                            <div class="card-header">auto</div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                        <div class="card">
                            <div class="card-header">santé</div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                        <div class="card">
                            <div class="card-header">protection juridique</div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
