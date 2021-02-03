@extends('layout')

@section('content')
    <section class="product-self">
        <div class="container">
            @foreach($product as $item)
                <h1 class="self-title">{{ $item->name }}</h1>
                <img class="self-img" src="..." alt="...">
                <p class="self-text">{{ $item->description }}</p>
                <div class="row self-detail justify-content-between align-items-end mb-5">
                    <div class="col-3">prix : {{ $item->price }}€</div>
                    <div class="col-3">poid : {{ $item->weight }} gr</div>
                    <div class="col-3">quantité : {{ $item->quantity }}</div>
                    <div class="col-3"><a href="{{ route('product-self',$item->id) }}" class="self-btn btn btn-lc">Acheter</a></div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
