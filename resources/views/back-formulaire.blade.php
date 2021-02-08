@extends('layoutback')

@section('content')
    <div class="container">
        <form action="{{ route('backUpdated', $car)}}" method="POST" class="row">
            @method('PUT')
            {{ csrf_field() }}
            <div class="col-sm-4">
                <input type="text" class="form-control mb-2 input-lc" placeholder="marque" name="marque" value="{{$car->marque}}">
                <input type="text" class="form-control mb-2 input-lc return" placeholder="model" name="model" value="{{$car->model}}">
                <input type="number" class="form-control mb-2 input-lc" placeholder="year" name="year" value="{{$car->year}}">
                <input type="number" class="form-control mb-2 input-lc return" placeholder="kilométrage" name="km" value="{{$car->km}}">
                <input type="number" class="form-control mb-2 input-lc " placeholder="prix" name="prix" value="{{$car->prix}}">
                <input type="text" class="form-control mb-2 input-lc return" placeholder="image.jpg" name="picture" value="{{$car->picture}}">
            </div>
            <div class="col-sm-4">
                <textarea class="form-control input-lc mb-2" style="transform: skewX(6deg)" id="description" name="description" rows="8" placeholder="Description">{{$car->description}}</textarea>
                <button type="submit" class="btn btn-lc w-100 ml-2">Envoyer</button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
