@extends('layouts.dash')

@section('content')

<article class="container">   
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Client</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <th scope="row"> {{ $user->client_id }} </th>
                    <td> {{ $user->nom }} </td>
                    <td> {{ $user->prenom }} </td>
                    <td> {{ $user->adresse }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->telephone }} </td>
                    <td>
                        <button class="btn btn-primary">A</button>
                        <button class="btn btn-primary">B</button>
                        <button class="btn btn-primary">C</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</article>

@endsection
