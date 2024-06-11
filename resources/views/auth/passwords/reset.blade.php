
<style>
    .m-5 {
        margin: 1.25rem;
    }

    .container {
        display: flex;
        justify-content: center;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 0.25rem;
        margin-top: 1rem;
        width: 100%;
        max-width: 25rem;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #ccc;
        font-weight: bold;
        padding: 0.75rem;
        text-align: center;
    }

    .card-body {
        padding: 1rem;
    }

    .row {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 0.25rem;
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
    }

    .invalid-feedback {
        color: #dc3545;
        display: block;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .btn {
        background-color: #007bff;
        border: none;
        border-radius: 0.25rem;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        padding: 0.5rem 1rem;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
    }
    .logo {
        display: flex;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .logo img {
        max-width: 50%;
        height: 50%;
    }
</style>

<header>
    <div class="logo">
        <img src="{{ asset('assets/images/logo/4.png') }}" alt="Logo de votre site">
    </div>
</header>

<section class="mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="color: #880000;">Réinitialiser mon mot de passe</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">L'adresse email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe : </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer le mot de passe</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #880000;">
                                        Réinitialiser le mot de passe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

