@extends('layout')

@section('content')
    <div class="product-list container">
        <h1>Liste des produits</h1>
        <div class="row">
        @foreach($products as $product)
                <div class="card col-sm-4">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="card-content">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <a href="{{ route('product-self',$product->id) }}" class="card-btn btn btn-lc">Acheter</a>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
@endsection
