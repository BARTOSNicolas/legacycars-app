@extends('layoutback');

@section('content')
    <div class="container">
    <a href="{{ route('formulaire') }}" class="self-btn btn btn-lc mb-5">Ajouter une entrée</a>
        <div class="text-center col-sm-4 offset-4">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                @if(session('error'))
                    <div class="alert alert-success">
                        {{ session('error') }}
                    </div>
                @endif
        </div>
    <table class="table text-light table-borderless">
        <caption>Liste des voitures</caption>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">car</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $car->marque }} - {{ $car->model }}</td>
            <td><a href="{{ route('backUpdate',$car->id) }}" class="self-btn btn btn-lc w-100">Modifier le produit</a></td>
            <td>
                <form action="{{ route('backDelete',$car->id) }}" method="POST">
                    @method('DELETE')
                    {{ csrf_field() }}
                    <button class="self-btn btn btn-lc w-100" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
        <table class="table text-light table-borderless">
            <caption>Listes des vendeurs</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">first name</th>
                <th scope="col">last name</th>
                <th scope="col">phone</th>
                <th scope="col">car(s)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sellers as $seller)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $seller->firstname }}</td>
                    <td>{{ $seller->lastname }}</td>
                    <td>{{ $seller->phone }}</td>
                    <td>
                        @foreach($seller->voitures as $car)
                            <p>{{ $car->marque }} - {{ $car->model }}</p>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
