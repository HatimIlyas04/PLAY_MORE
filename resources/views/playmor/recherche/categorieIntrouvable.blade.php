@extends('playmor.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center m-5">
            <img src="{{ asset('assets/images/pageIntrouvable/no-product-found.gif') }}" alt="Article introuvable">
            <h2 class="mt-4" style="color: #880000;">Désoléééé !!! La catégorie "{{ $categorieDeRecherche }}" est introuvable</h2>
            <p class="lead">Veuillez consulter un autre</p>
        </div>
    </div>
</div>

@endsection
