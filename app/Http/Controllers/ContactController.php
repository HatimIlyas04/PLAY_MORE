<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Boutique;

class ContactController extends Controller
{

    public function index()
    {
        $boutiques = Boutique::all();
        return view('playmor.contact', compact('boutiques'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire de contact si nécessaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'message' => 'required',
        ]);
    
        // Créer un nouvel objet Contact avec les données validées
        $contact = new Contact([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'message' => $validatedData['message'],
        ]);
    
        // Enregistrer le message dans la base de données
        $contact->save();
    
        // Retourner une réponse ou rediriger vers une autre page après l'enregistrement du message
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
    
}
