@extends('playmor.header')

@section('content')
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>About Us</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Fresh Vegetable Section Start -->
<section class="fresh-vegetable-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
            <div class="col-xl-6 col-12">
                <div class="row g-sm-4 g-2">
                    <div class="col-6">
                        <div class="fresh-image-2">
                            <div>
                                <img src="../assets/images/inner-page/about-us/2.jpg" class="bg-img blur-up lazyload" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="fresh-image">
                            <div>
                                <img src="../assets/images/inner-page/about-us/1.jpg" class="bg-img blur-up lazyload" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div class="review-title">
                            <h2>Level up with us! 🎮</h2>
                        </div>

                        <div class="delivery-list">
                            <p class="text-content">Bienvenue chez Playmore, 
                                votre destination ultime pour tout ce qui concerne les jeux vidéo !</p>
                            <p class="text-content">À Playmore, nous sommes passionnés par les jeux vidéo et nous voulons offrir à nos clients une expérience de jeu exceptionnelle. Notre équipe est composée de gamers passionnés qui travaillent dur pour vous apporter les meilleurs jeux, accessoires et équipements gaming du marché.</p>
                            <p class="text-content">Nous proposons une vaste sélection de jeux pour toutes les plateformes populaires, y compris les consoles de salon, les PC et les jeux mobiles. Que vous soyez fan de jeux d'action, d'aventure, de sport, de stratégie ou de jeux de rôle, vous trouverez votre bonheur parmi notre large catalogue.</p>
                            <p class="text-content">Parcourez notre site, découvrez les dernières nouveautés, lisez les avis des autres joueurs et passez votre commande en toute confiance. Nous nous engageons à vous offrir un service de qualité, une livraison rapide et un support client exceptionnel.</p>
                            <p class="text-content">Merci d'avoir choisi Playmore comme votre partenaire gaming. Rejoignez-nous et plongez dans le monde du jeu vidéo avec passion et enthousiasme !</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fresh Vegetable Section End -->

<!-- Client Section Start -->
<section class="client-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="about-us-title text-center">
                    <h4>What We Do</h4>
                    <h2 class="center">We are Trusted by Clients</h2>
                </div>

                <div class="slider-3_1 product-wrapper">
                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="../assets/svg/3/work.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>10</h2>
                            <h4>Business Years</h4>
                            <p>Nous proposons une large gamme de produits pour satisfaire tous les passionnés de jeux vidéo. 
                                Découvrez notre sélection variée et plongez dans un monde de divertissement virtuel sans limites.</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="../assets/svg/3/buy.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>80 K+</h2>
                            <h4>Products Sales</h4>
                            <p>Découvrez notre collection exclusive de produits gaming qui sauront satisfaire tous les joueurs passionnés.
                                 Plongez dans une expérience de jeu exceptionnelle avec nos articles soigneusement sélectionnés.</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="../assets/svg/3/user.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>90%</h2>
                            <h4>Happy Customers</h4>
                            <p>La satisfaction de nos clients est notre priorité absolue. 
                                Rejoignez notre communauté de joueurs comblés et vivez des expériences de jeu inoubliables. 
                                Joie garantie, à chaque instant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->

<!-- Team Section Start -->
{{-- <section class="team-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="about-us-title text-center">
            <h4 class="text-content">Our Creative Team</h4>
            <h2 class="center">fastkart team member</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-user product-wrapper">
                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="../assets/images/inner-page/user/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>cheeseburger airedale mozzarella the big cheese fondue.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="../assets/images/inner-page/user/2.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>cheese on toast mozzarella bavarian bergkase smelly cheese cheesy feet.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="../assets/images/inner-page/user/3.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>camembert de normandie. Bocconcini rubber cheese fromage frais port-salut.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="../assets/images/inner-page/user/4.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>Fondue stinking bishop goat. Macaroni cheese croque monsieur cottage cheese.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-box">
                            <div class="team-iamge">
                                <img src="../assets/images/inner-page/user/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="team-name">
                                <h3>Anna Baranov</h3>
                                <h5>Marketing</h5>
                                <p>squirty cheese cheddar macaroni cheese airedale cheese triangles.</p>
                                <ul class="team-media">
                                    <li>
                                        <a href="https://www.facebook.com/" class="fb-bg">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://in.pinterest.com/" class="pint-bg">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" class="twitter-bg">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.instagram.com/" class="insta-bg">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Team Section End -->

<!-- Review Section Start -->
<section class="review-section section-lg-space">
    <div class="container-fluid">
        <div class="about-us-title text-center">
            <h4 class="text-content">Latest Testimonals</h4>
            <h2 class="center">What people say</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-4-half product-wrapper">
                    @foreach($commentaires as $commentaire)
                    <div>                       
                        <div class="reviewer-box">
                            <i class="fa-solid fa-quote-right"></i>
                            <p>{{$commentaire->contenu}}</p>
                            <div class="reviewer-profile">
                                <div class="reviewer-image">
                                    <img src="{{ asset('storage/' . $commentaire->user->image_utilisateur) }}" class="blur-up lazyload" alt="">
                                </div>
                                <div class="reviewer-name">
                                    <h4>{{$commentaire->user->prenom_utilisateur}}
                                        {{$commentaire->user->nom_utilisateur}}</h4>
                                    <h6>{{$commentaire->user->identifiant_utilisateur}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review Section End hell -->
<section>

    @if(Auth::check()) 
    <div class="container">    
        <form action=""{{ route('comment.create') }}"" method="POST">
        @csrf
        <div class="form-group">
            <h3>Votre commentaire :</h3><br>
            <textarea class="form-control" id="contenu" name="contenu" rows="4" placeholder="Ajouter un commentaire"></textarea>
        </div><br>
        <button type="submit" class="btn btn-primary container" style="background-color: #880000">Ajouter</button>
    </form>  
    </div>
    <br>  
    @else
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">Connectez-vous pour commenter !!</div>
    <br>
    @endif
</section>
@endsection