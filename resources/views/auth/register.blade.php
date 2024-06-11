@extends('playmor.header')

@section('content')
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Inscription</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Inscription</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Section d'inscription -->
<section class="log-in-section section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-5 col-xl-4 col-lg-5 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="../assets/images/inner-page/sign-up.jpg" class="img-fluid" style="max-width: 100%;" alt="">
                </div>
            </div>

            <div class="col-xxl-7 col-xl-8 col-lg-7 col-sm-12">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3 class="display-4 fw-bold">Bienvenue sur PlayMore</h3>
                        <h4>Créer un nouveau compte</h4>
                    </div>
                    <div class="input-box">
                        <form class="row g-4" action="{{ route('register') }}" method="POST" id="monFormulaire" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-2 form-group">
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select custom-select-dropdown" id="gender" name="sexe_utilisateur" value="{{ old('sexe_utilisateur') }}" required>
                                        <option value="">M/Mme</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </div>
                                @error('sexe_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-5 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="firstname" value="{{ old('prenom_utilisateur') }}" name="prenom_utilisateur" placeholder="Prénom" required>
                                    <label for="firstname">Prénom</label>
                                </div>
                                @error('prenom_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-5 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="lastname" value="{{ old('nom_utilisateur') }}" name="nom_utilisateur" placeholder="Nom" required>
                                    <label for="lastname">Nom</label>
                                </div>
                                @error('nom_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="username" name="identifiant_utilisateur" value="{{ old('identifiant_utilisateur') }}" placeholder="Identifiant" required>
                                    <label for="username">Identifiant</label>
                                </div>
                                @error('identifiant_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Adresse e-mail" required>
                                    <label for="email">Adresse e-mail</label>
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" id="password" value="{{ old('password') }}" name="password" placeholder="Mot de passe" required>
                                    <label for="password">Mot de passe</label>
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="phone" name="telephone_utilisateur" value="{{ old('telephone_utilisateur') }}" placeholder="Numéro de téléphone" required>
                                    <label for="phone">Numéro de téléphone</label>
                                </div>
                                @error('telephone_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address" value="{{ old('adresse_utilisateur') }}" name="adresse_utilisateur" placeholder="Adresse" required>
                                    <label for="address">Adresse</label>
                                </div>
                                @error('adresse_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select custom-select-dropdown" value="{{ old('ville_id') }}" id="city" name="ville_id" required> 
                                        <option value="">Sélectionnez une ville</option>
                                        @foreach($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->libelle_ville }}</option>
                                        @endforeach
                                    </select>
                                    <label for="city" id="city-label" @if(!old('ville_id')) style="display: none;" @endif>Ville</label>
                                </div>
                                @error('ville_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="numero_carte_bancaire" value="{{ old('numero_carte_bancaire') }}" name="numero_carte_bancaire" required>
                                    <label for="numero_carte_bancaire">N° de carte bancaire</label>
                                </div>
                                @error('numero_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="date" class="form-control" id="date_expiration_carte_bancaire" value="{{ old('date_expiration_carte_bancaire') }}" name="date_expiration_carte_bancaire" required>
                                    <label for="date_expiration_carte_bancaire">Date expiration</label>
                                </div>
                                @error('date_expiration_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-4 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="code_validation_carte_bancaire" value="{{ old('code_validation_carte_bancaire') }}" name="code_validation_carte_bancaire" min="3" max="3" required>
                                    <label for="code_validation_carte_bancaire">Code validation</label>
                                </div>
                                @error('code_validation_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="file" class="form-control file" id="image_utilisateur" value="{{ old('image_utilisateur') }}" name="image_utilisateur" required>
                                </div>
                                @error('image_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            
                            <div class="offset-4 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="hidden" class="form-control" id="valeur-captcha" name="valeur-captcha" value="{{ $randomCaptcha }}" > 
                                    <h2 style="text-align: center; background-color: #880000; color: #ffffff; font-style: italic;width : 25%">{{ $randomCaptcha }}</h2>
                                </div>
                            </div>

                            <!-- le système de captcha -->
                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="captcha" name="captcha" required>
                                    <label for="captcha">Code Captcha (utilisez le code ci-dessus)</label>
                                </div>
                                @error('captcha')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox" id="terms" name="terms">
                                        <label class="form-check-label" for="terms">J'accepte les <span><a href="#"> d'utilisation et la Vie privée</a></span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit">S'inscrire</button>
                            </div>
                        </form>
                    </div>

                    <div class="other-log-in">
                        <h6>ou</h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Vous avez déjà un compte ?</h4>
                        <a href="{{ route('login') }}">Se connecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin de la section d'inscription -->
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#city').on('click', function() {
                $('#city-label').show();
            });
        });
    </script>
@endpush

<script>
  document.getElementById("monFormulaire").addEventListener("submit", function(event) {
    if (!document.getElementById("terms").checked) {
      event.preventDefault(); // Empêche la soumission du formulaire
      alert("Veuillez accepter les conditions d'utilisation et la vie privée.");
    }
  });
</script>

@endsection
