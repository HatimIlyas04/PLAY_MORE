<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Ville;
use App\Models\Commande;
use App\Models\CarteBancaire;
use Carbon\Carbon;




class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $villes = Ville::all();
        $villeUser = Ville::findOrFail($user->ville_id);
        $commandes = Commande::where('utilisateur_id', $user->id)->with('etatCommande')->get();
        $carteBancaire = $user->carteBancaire;

        $dateCreation = Carbon::parse(auth()->user()->created_at);
        $maintenant = Carbon::now();
    
        $diffEnJours = $dateCreation->diffInDays($maintenant);
        $diffEnSemaines = $dateCreation->diffInWeeks($maintenant);
        $diffEnMois = $dateCreation->diffInMonths($maintenant);
        $diffEnAnnees = $dateCreation->diffInYears($maintenant);
    
        if ($diffEnJours < 1) {
            $duree = 1;
            $unite = 'jour';
        } elseif ($diffEnSemaines < 1) {
            $duree = $dateCreation->diffInDays($maintenant);
            $unite = ($duree === 1) ? 'jour' : 'jours';
        } elseif ($diffEnMois < 1) {
            $duree = $diffEnSemaines;
            $unite = ($duree === 1) ? 'semaine' : 'semaines';
        } elseif ($diffEnAnnees < 1) {
            $duree = $diffEnMois;
            $unite = ($duree === 1) ? 'mois' : 'mois';
        } else {
            $duree = $diffEnAnnees;
            $unite = ($duree === 1) ? 'année' : 'années';
        }

        return view('playmor.profile', compact('user','villes','villeUser','commandes','carteBancaire','duree','unite'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        // Valider les données du formulaire de modification
        $validatedData = $request->validate([
            'nom_utilisateur' => 'sometimes|required|string|max:255',
            'prenom_utilisateur' => 'sometimes|required|string|max:255',
            'telephone_utilisateur' => 'sometimes|required|string|max:20',
            'adresse_utilisateur' => 'sometimes|required|string|max:255',
            'ville_id' => 'sometimes|required|string|max:255',
            'sexe_utilisateur' => 'sometimes|required|string|in:Homme,Femme',
            'image_utilisateur' => 'nullable|image|max:2048',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required',
            'new_email' => 'sometimes|required|string|email|max:255|unique:users,email,'.$user->id,
            
        ]);
    
        // Vérifier si le mot de passe est correct
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Mot de passe incorrect');
        }
    
        // Mettre à jour les informations de base de l'utilisateur
        $user->nom_utilisateur = $validatedData['nom_utilisateur'] ?? $user->nom_utilisateur;
        $user->prenom_utilisateur = $validatedData['prenom_utilisateur'] ?? $user->prenom_utilisateur;
        $user->telephone_utilisateur = $validatedData['telephone_utilisateur'] ?? $user->telephone_utilisateur;
        $user->adresse_utilisateur = $validatedData['adresse_utilisateur'] ?? $user->adresse_utilisateur;
        $user->ville_id = $validatedData['ville_id'] ?? $user->ville_id;
        $user->sexe_utilisateur = $validatedData['sexe_utilisateur'] ?? $user->sexe_utilisateur;
    
        // Vérifier si l'email doit être modifié
        if ($request->filled('new_email') && $request->new_email != $user->email) {
            $user->email = $validatedData['new_email'];
            
        }
    
        // Vérifier si le mot de passe doit être modifié
        if ($request->filled('new_password')) {
            $validatedData = $request->validate([
                'new_password' => 'required|min:8',
                'new_password_confirmation' => 'required|same:new_password',
            ]);
            $user->password = Hash::make($validatedData['new_password']);
            
        }
    
        // Gérer l'upload de l'image de profil si elle est présente             
        if ($request->hasFile('image_utilisateur')) {

            $imagePath = $request->file('image_utilisateur')->store('images/utilisateurs', 'public');

            // Supprimer l'ancienne image si elle existe
            if ($user->image_utilisateur) {
                Storage::delete($user->image_utilisateur);
            }

            $user->image_utilisateur = $imagePath;
        }

    
        $user->save();
    
        return redirect('/profile')->with('success', 'Les informations ont été mises à jour avec succès.');
    }
    
    

    public function destroy()
    {
        $user = Auth::user();
        $commandes = Commande::where('utilisateur_id', $user->id)->get();
        $hasActiveOrders = 0;
        foreach ($commandes as $commande){
            if ($commande->etat_commande_id===1){
                $hasActiveOrders += 1;
            }
        }
        
    
        if ($hasActiveOrders>0) {
            // S'il y a des commandes en cours, afficher un message d'erreur
            return back()->with('error', 'Vous ne pouvez pas supprimer votre compte car vous avez des commandes en cours.');
        }

        // Déconnecter l'utilisateur
        Auth::logout();
    
        // Supprimer le compte de l'utilisateur
        $user->delete();

        // Rediriger vers la page d'accueil ou afficher un message de succès
        return redirect('/')->with('success', 'Votre compte a été supprimé avec succès.');
    }
    
    
    public function edit($id){

        $user = Auth::user(); 
        return view('playmor.editProfile',compact('user'));
    }
}
