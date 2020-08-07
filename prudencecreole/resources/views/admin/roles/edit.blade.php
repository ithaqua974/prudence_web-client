@extends('layouts.dash')

@section('content')

<article class="container">   
        
    <form action="{{ route('admin_roles@update', ['id' => $role->id]) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" class="" name="role" value="{{ $role->role }}">
        <input class="btn btn-primary" type="submit" value="Créer">
    </form>


</article>

@endsection
