@extends('layouts.dash')

@section('content')


<article class="container">   
 @foreach ($users as $user)

 <ul class="row list-group">

 
    <li class="list-group-item mb-2">{{ $user->nom }} {{ $user->prenom }} </li>



</ul>
    @endforeach
</article>

@endsection
