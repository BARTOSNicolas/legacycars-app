@extends('layout')

@section('content')
    <section class="title sale">
        <div class="container">
            <h1 class="page-title">Vendre ma voiture</h1>
        </div>
    </section>
    <section class="content sale container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="subtilte">Service</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel porta magna. Aliquam ut eleifend ipsum. Proin lacus erat, sodales ut finibus vitae, convallis ac ligula. Vivamus quis risus vestibulum, lacinia orci vel, lacinia tellus. Ut nec dolor sed nisi.</p>
                <h2 class="subtilte">Conditions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel porta magna. Aliquam ut eleifend ipsum. Proin lacus erat, sodales ut finibus vitae, convallis ac ligula. Vivamus quis risus vestibulum, lacinia orci vel, lacinia tellus. Ut nec dolor sed nisi.</p>
                <h2 class="subtilte">Garantie</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel porta magna. Aliquam ut eleifend ipsum. Proin lacus erat, sodales ut finibus vitae, convallis ac ligula. Vivamus quis risus vestibulum, lacinia orci vel, lacinia tellus. Ut nec dolor sed nisi.</p>
            </div>
            <div class="col-sm-4">
                <form action="{{ route('validation') }}" method="POST">
                    {{ csrf_field() }}
                    <h2 class="subtilte">Vendeur</h2>
                    <div class=" d-flex mb-5 flex-column">
                        <input type="text" class="form-control mb-2 input-lc" placeholder="Votre prénom" name="first_name">
                        <input type="text" class="form-control mb-2 input-lc return" placeholder="votre nom" name="last_name">
                        <input type="text" class="form-control mb-2 input-lc" placeholder="Votre mail" name="mail">
                        <input type="text" class="form-control mb-2 input-lc return" placeholder="Votre n° de téléphone" name="phone">
                    </div>
                    <h2 class="subtilte">Voiture</h2>
                    <div class=" d-flex flex-column">
                        <input type="text" class="form-control mb-2 input-lc" placeholder="Marque" name="marque">
                        <input type="text" class="form-control mb-2 input-lc return" placeholder="Modèle" name="model">
                        <input type="number" class="form-control mb-2 input-lc" placeholder="Année" name="year">
                        <input type="number" class="form-control mb-2 input-lc return" placeholder="kilométrage" name="km">
                        <input type="number" class="form-control mb-2 input-lc" placeholder="prix" name="prix">
                        <input type="text" class="form-control mb-2 input-lc return" placeholder="image.jpg" name="picture">
{{--                        <input class="form-control mb-2 input-lc return" type="file" id="photoMultiple" multiple>--}}
                        <textarea class="form-control input-lc ml-2 mb-2" id="message" name="description" rows="4" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lc w-100 ml-3">Envoyer</button>
                    <div class="text-center col-sm-4 offset-4">
                        @if(session('error'))
                            <div class="alert alert-success">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="img-container mb-3">
                            <span class="close-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span>
                            <div class="overflow"><img src="/img/vendre-1.jpg" alt="photo Aston BD7 de face"></div>
                        </div>
                        <div class="img-container mb-3">
                            <span class="close-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span>
                            <div class="overflow"><img src="/img/vendre-2.jpg" alt="photo Aston BD7 intérieur"></div>
                        </div>
                        <div class="img-container mb-3">
                            <span class="close-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span>
                            <div class="overflow"><img src="/img/vendre-3.jpg" alt="photo Aston BD7 de 3/4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(Request::isMethod('post'))
        <p class="text-light">{{$form['first_name']}}, {{$form['last_name']}}, {{$form['mail']}}, {{$form['phone']}}, {{$form['marque']}}, {{$form['model']}}, {{$form['annee']}}, {{$form['kilometrage']}}, {{$form['prix']}}</p>
    @endif
@endsection
