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

            @foreach ($types as $type)
                <tr>
                    <th scope="row"> {{ $type->id }} </th>
                    <td> {{ $type->type }} </td>
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
