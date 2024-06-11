<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Ville;
use App\Models\Privilege;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CarteBancaire;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::USER_HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $villes = Ville::all();
        $randomCaptcha = ucfirst(Str::random(6)); // Génère un texte aléatoire de 6 caractères
        return view('auth.register', compact('villes' , 'randomCaptcha'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'identifiant_utilisateur' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'nom_utilisateur' => ['required', 'string', 'max:255'],
            'prenom_utilisateur' => ['required', 'string', 'max:255'],
            'sexe_utilisateur' => ['required', 'string', 'in:Homme,Femme'],
            'telephone_utilisateur' => ['required', 'string', 'max:255'],
            'adresse_utilisateur' => ['required', 'string'],
            'image_utilisateur' => ['required', 'image', 'mimes:jpeg,jpg,svg,png', 'max:2048'],
            'ville_id' => ['required', 'exists:villes,id'],
            'numero_carte_bancaire' => ['required', 'unique:carte_bancaires'],
            'captcha' => ['required', 'string', 'same:valeur-captcha'],
        ]);
    }

    protected function create(array $data)
    {
        
        // Créer la carte bancaire et récupérer son ID
        $carteBancaire = CarteBancaire::create([
            'numero_carte_bancaire' => $data['numero_carte_bancaire'],
            'date_expiration_carte_bancaire' => $data['date_expiration_carte_bancaire'],
            'code_validation_carte_bancaire' => Hash::make($data['code_validation_carte_bancaire']),
            'solde_carte_bancaire' => rand(100000 , 10000000)
        ]);

        // Gérer le téléchargement et le stockage de l'image
        $imagePath = $data['image_utilisateur']->store('images/utilisateurs', 'public'); // Stockez l'image dans le répertoire "public/images" et récupérez le chemin du fichier
        $imagePath = str_replace('public/', '', $imagePath); // Supprimez le préfixe "public/" du chemin de l'image

        return User::create([
            'identifiant_utilisateur' => $data['identifiant_utilisateur'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nom_utilisateur' => $data['nom_utilisateur'],
            'prenom_utilisateur' => $data['prenom_utilisateur'],
            'sexe_utilisateur' => $data['sexe_utilisateur'],
            'telephone_utilisateur' => $data['telephone_utilisateur'],
            'adresse_utilisateur' => $data['adresse_utilisateur'],
            'image_utilisateur' => $imagePath,
            'ville_id' => $data['ville_id'],
            'privilege_id' => 2,
            'carte_bancaire_id' => $carteBancaire->id,
        ]);

        
    }
}
