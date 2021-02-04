@extends('layoutback');

@section('content')
    <div class="container">
    <a href="{{ route('formulaire') }}" class="self-btn btn btn-lc mb-5">Ajouter une entrée</a>
    <table class="table text-light table-borderless">
        <caption>List of products</caption>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
        <tr>
            <th scope="row">{{ $car->id }}</th>
            <td>{{ $car->marque }} - {{ $car->model }}</td>
            <td><a href="{{ route('backUpdate',$car->id) }}" class="self-btn btn btn-lc">Modifier le produit</a></td>
            <td><a href="{{ route('backDelete',$car->id) }}" class="self-btn btn btn-lc">Supprimer le produit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
