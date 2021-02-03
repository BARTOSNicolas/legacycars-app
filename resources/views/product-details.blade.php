@extends('layout')

@section('content')
    <section class="product-self">
        <div class="container">
                <h1 class="self-title">{{ $product->name }}</h1>
                <img class="self-img" src="..." alt="...">
                <p class="self-text">{{ $product->description }}</p>
                <div class="row self-detail justify-content-between align-items-end mb-5">
                    <div class="col-3">prix : {{ $product->price }}€</div>
                    <div class="col-3">poid : {{ $product->weight }} gr</div>
                    <div class="col-3">quantité : {{ $product->quantity }}</div>
                    <div class="col-3"><a href="{{ route('product-self',$product->id) }}" class="self-btn btn btn-lc">Acheter</a></div>
                </div>
        </div>
    </section>
@endsection
