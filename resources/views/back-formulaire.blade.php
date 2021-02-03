@extends('layoutback')

@section('content')
    <div class="container">
        <form action="{{ route('addForm') }}" method="POST" class="row">
            {{ csrf_field() }}
            <div class="col-sm-4">
                <input type="text" class="form-control mb-2 input-lc return" placeholder="name" name="name">
                <input type="number" class="form-control mb-2 input-lc return" placeholder="price" name="price">
                <input type="number" class="form-control mb-2 input-lc" placeholder="weight" name="weight">
                <input type="number" class="form-control mb-2 input-lc return" placeholder="quantity" name="quantity">
                <input type="text" class="form-control mb-2 input-lc" placeholder="picture" name="picture">
                <button type="submit" class="btn btn-lc w-100">Envoyer</button>
            </div>
            <div class="col-sm-4">
                <textarea class="form-control input-lc mb-2" id="description" name="description" rows="4" placeholder="Description"></textarea>
                <div class="form-check text-light">
                    <input class="form-check-input" value="1" type="radio" name="available" id="available1" checked>
                    <label class="form-check-label" for="available1">
                        available
                    </label>
                </div>
                <div class="form-check mb-2 text-light">
                    <input class="form-check-input" value="0" type="radio" name="available" id="available2">
                    <label class="form-check-label" for="available2">
                        not available
                    </label>
                </div>

                <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg example" name="categorie_id">
                    <option selected disabled>Choix catégorie</option>
                    <option value="1">Catégorie 1</option>
                    <option value="2">Catégorie 2</option>
                    <option value="3">Catégorie 3</option>
                </select>

            </div>
        </form>
    </div>
@endsection
