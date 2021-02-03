@extends('layoutback');

@section('content')
    <div class="container">
    <a href="{{ route('backCreate') }}" class="self-btn btn btn-lc mb-5">Ajouter une entrée</a>
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
        @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td><a href="{{ route('backUpdate',$product->id) }}" class="self-btn btn btn-lc">Modifier le produit</a></td>
            <td><a href="{{ route('backDelete',$product->id) }}" class="self-btn btn btn-lc">Supprimer le produit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
