@extends('layoutback')

@section('content')
    <div class="container">
        <div class="result">
            @if($help == 'created')
                <p class="text">{{ $message_error }}</p>
                <a href="{{ route('backoffice') }}" class="btn btn-lc">Retour au backoffice</a>
            @endif
            @if($help == 'updated')
                <p class="text">Votre voiture a été modifié</p>
                <a href="{{ route('backoffice') }}" class="btn btn-lc">Retour au backoffice</a>
            @endif
            @if($help == 'deleted')
                <p class="text">Votre voiture a été supprimer</p>
                <a href="{{ route('backoffice') }}" class="btn btn-lc">Retour au backoffice</a>
            @endif

        </div>
    </div>

@endsection
