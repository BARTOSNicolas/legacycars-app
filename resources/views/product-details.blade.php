@extends('layout')

@section('content')
    <section class="product-self">
        <div class="container">
            <h1 class="self-title">{{ $car->marque }} {{ $car->model }}</h1>
            <div class="row">
                <div class="col-md-6 self-img"><img class="" src="{{ asset('img/products/'.$car->picture) }}" alt="..."></div>
                <div class="col-md-6">
                    <p class="self-text">{{ $car->description }}</p>
                    <div class="row self-detail justify-content-between align-items-end mb-5">
                        <div class="col-3 text-primary">année : {{ $car->year }}</div>
                        <div class="col-3 text-primary">kilométrage : {{ $car->km }} km</div>
                        <div class="col-3 text-primary">prix : {{ $car->prix }}€</div>
                        <div class="col-3"><a href="{{ route('product-self',$car->id) }}" class="self-btn btn btn-lc">Acheter</a></div>
                    </div>
                </div>
            </div>




        </div>
    </section>
@endsection
