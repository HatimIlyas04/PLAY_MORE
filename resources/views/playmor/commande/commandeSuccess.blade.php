@extends('playmor.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center m-5">
            <img src="{{ asset('assets/images/commande/success.gif') }}" alt="Article introuvable">
            <h2 class="mt-4" style="color: #880000;">Bravoooooo !</h2>
            <p class="lead">Votre commande a été bien passé</p>
        </div>
    </div>
</div>

@endsection