@extends('layouts.dash')

@section('content')

<article class="container">   
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($roles as $role)
                <tr>
                    <th scope="row"> {{ $role->id }} </th>
                    <td> {{ $role->role }} </td>
                    <td>
                        <a href="{{ route('admin_roles@show', ['id' => $role->id ]) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('admin_roles@edit', ['id' => $role->id ]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin_roles@destroy', ['id' => $role->id ]) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
                <tr>
                    <th colspan="3" scope="row" class="">
                        <a href="{{ route('admin_roles@create') }}" class="btn btn-primary">Ajouter un nouveau role</a>
                    </th>
                </tr>
        </tbody>
    </table>

</article>

@endsection
