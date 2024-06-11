@extends('admin.dashboard')
@section('title', 'Edit  ')

@section('content')

<form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('admin.user.update', ['id'=>$user->id]) }}"  enctype="multipart/form-data"> 
    @csrf 
    @method('PATCH')

    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>{{$user->identifiant_utilisateur}}'s Information</h5>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">
                                                Email </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="Email" placeholder="Email" 
                                                name='email'
                                                value='{{$user->email}}'>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title"> username
                                                 </label>
                                                <div class="col-sm-9">
                                                    <textarea name="identifiant_utilisateur" id="identifiant_utilisateur" class="form-control" rows="5">{{$user->identifiant_utilisateur}}</textarea>

                                                </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">
                                                Name </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="prenom_utilisateur" 
                                                name='prenom_utilisateur'
                                                value='{{$user->prenom_utilisateur}}'>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">
                                                Last Name </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="nom_utilisateur" 
                                                name='nom_utilisateur'
                                                value='{{$user->nom_utilisateur}}'>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">
                                                Sexe </label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="sexe_utilisateur">
                                                        <option value="homme" {{ $user->sexe_utilisateur === 'homme' ? 'selected' : '' }}>Homme</option>
                                                        <option value="femme" {{ $user->sexe_utilisateur === 'femme' ? 'selected' : '' }}>Femme</option>
                                                    </select>
                                                </div>
                                                
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">
                                                Phone </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="telephone_utilisateur" 
                                                name='telephone_utilisateur'
                                                value='{{$user->telephone_utilisateur}}'>
                                            </div>
                                        </div>

                                    
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>User image(optional) </h5>
                                    </div>

                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file" id="formFile" name='image_utilisateur'>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Location</h5>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">
                                        Adress </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="adresse_utilisateur" 
                                        name='adresse_utilisateur'
                                        value='{{$user->adresse_utilisateur}}'>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center mt-3">
                                    <label class="col-sm-3 col-form-label form-label-title">Ville</label>
                                    <div class="col-sm-9">
                                        <div id="villes">
                                                <div class="d-flex tag-row my-1">
                                                    <div class="form-group flex-grow-1 mr-2">
                                                        <select name="ville_id" class="form-control mt-3">
                                                            @foreach ($villes as $ville)
                                                                <option value="{{ $ville->id }}" {{ $user->ville_id == $ville->id ? 
                                                                'selected' : '' }}>
                                                                {{ $ville->libelle_ville }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                 </div>
                                           
                                        </div>  
                                        
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                           
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Card Information</h5>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">
                                        Card Number </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Card Number" 
                                        name='numero_carte_bancaire'
                                        value='{{$user->carteBancaire->numero_carte_bancaire}}'>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">
                                        Expiration Date </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" placeholder="Expiration Date" 
                                        name="date_expiration_carte_bancaire"
                                        value="{{ $user->carteBancaire->date_expiration_carte_bancaire ?? '' }}">
                                    </div>
                                </div>
                                
                                
                            
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Privilege</h5>
                                </div>
                        
                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Privilege</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="privilege_id">
                                                @foreach ($privileges as $privilege)
                                                    <option value="{{ $privilege->id }}" {{ $user->privilege_id == $privilege->id ? 'selected' : '' }}>
                                                        {{ $privilege->libelle_privilege }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                        
                                    <!-- Add more privilege fields here as needed -->
                                </div>
                            </div>
                        </div>

                           <button type="submit" class="btn  btn-primary container">UPDATE <i class="fas fa-folder"></i></button>

                            
                        </div>
                       

                    
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        
        <!-- footer En -->
    </div></form>
    

@endsection

