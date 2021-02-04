@extends('layoutback')

@section('content')
    <div class="container">
        <form action="{{ route('backUpdated', $car->id)}}" method="POST" class="row">
            {{ csrf_field() }}
            <div class="col-sm-4">
                <input type="text" class="form-control mb-2 input-lc return" placeholder="{{$car->marque}}" name="marque">
                <input type="text" class="form-control mb-2 input-lc return" placeholder="{{$car->model}}" name="model">
                <input type="number" class="form-control mb-2 input-lc" placeholder="{{$car->year}}" name="year">
                <input type="number" class="form-control mb-2 input-lc return" placeholder="{{$car->km}}" name="km">
                <input type="number" class="form-control mb-2 input-lc return" placeholder="{{$car->prix}}" name="prix">
                <input type="text" class="form-control mb-2 input-lc" placeholder="{{$car->picture}}" name="picture">
            </div>
            <div class="col-sm-4">
                <textarea class="form-control input-lc mb-2" style="transform: skewX(6deg)" id="description" name="description" rows="8" placeholder="{{$car->description}}"></textarea>
                <button type="submit" class="btn btn-lc w-100 ml-2">Envoyer</button>
            </div>
        </form>
    </div>
@endsection
