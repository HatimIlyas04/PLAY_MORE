@extends('playmor.header')

@section('content')
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2 class="mb-2">Connexion</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Connexion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Section de Connexion Start -->
<section class="log-in-section background-image-2 section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="../assets/images/inner-page/log-in.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3 class="display-4 fw-bold">Bienvenue sur PlayMore</h3>
                        <h4>Connectez-vous à votre compte</h4>
                    </div>

                    <div class="input-box">
                        <form class="row g-4" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="col-12">
                                <div class="form-floating theme-form-floating log-in-form">
                                    <input type="email" class="form-control" id="email" name="email" autofocus required placeholder="Adresse e-mail">
                                    <label for="email">Adresse e-mail</label>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-floating theme-form-floating log-in-form">
                                    <input type="password" class="form-control" id="password" name="password" autofocus required placeholder="Mot de passe">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault" name="remember">
                                        <label class="form-check-label" for="flexCheckDefault">Se souvenir de moi</label>
                                    </div>
                                    <a href="{{ route('password.request') }}">Mot de passe oublié ? </a>
                                </div>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="col-12">
                                <button class="btn btn-animation w-100 justify-content-center" type="submit">Connexion</button>
                            </div>
                        </form>
                    </div>

                    <div class="other-log-in">
                        <h6>ou</h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Vous n'avez pas de compte ?</h4>
                        <a href="{{ route('register') }}">Inscription</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section de Connexion End -->
@endsection
