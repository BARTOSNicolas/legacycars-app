@extends('layout')

@section('content')
    <section class="title list">
        <div class="container">
            <h1 class="page-title">Acheter une voiture</h1>
        </div>
    </section>
    <div class="product-list container">
        <h2>Liste des produits</h2>
        <div class="d-flex mb-4">
            <a href="{{ route('produitsByName') }}" class="card-btn btn btn-lc mr-5">Trier par nom</a>
            <a href="{{ route('produitsByPrice') }}" class="card-btn btn btn-lc">Trier par prix</a>
        </div>
        <div class="row">
        @foreach($cars as $car)
                <div class="card col-sm-4">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-content">
                            <div class="card-img-top"><img src="{{ asset('img/products/'.$car->picture) }}"  alt="..."></div>
                            <h5 class="card-title">{{ $car->marque }} - {{ $car->model }}</h5>
                            <p class="card-text">{{ $car->description }}</p>
                            <p class="card-price">Prix : {{ $car->prix }}€</p>

                        </div>
                        <a href="{{ route('product-self',$car->id) }}" class="card-btn btn btn-lc">Acheter</a>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
@endsection
