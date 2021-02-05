<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Back Office Legacy Cars</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/legacycarslogo.jpg" alt="logo Legacy-cars"  height="60">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produits') }}">Acheter une voiture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('formulaire') }}">Vendre sa voiture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('panier') }}">Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backoffice') }}">BackOffice</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<div class="container">
    <h1>LE BACK OFFICE</h1>
</div>
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
