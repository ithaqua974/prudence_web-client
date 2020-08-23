@extends('layouts.dash')

@section('content')

<article class="container">   
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Client</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <th scope="row"> {{ $user->client_id }} </th>
                    <td> {{ $user->nom }} </td>
                    <td> {{ $user->prenom }} </td>
                    <td>
                        
                        <a href="/admin/clients/detail/{{ $user->id }}" class="btn btn-primary">Détail</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</article>

@endsection
