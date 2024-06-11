<?php

namespace App\Http\Controllers;

use App\Events\FactureModifiee;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Fournisseur;
use App\Models\User;
use App\Models\Marque;
use App\Models\Privilege;
use App\Models\Tag;
use App\Models\Propriete;
use App\Models\Commande;
use App\Models\Ville;
use App\Models\CommandeDetail;
use App\Models\EtatCommande;
use App\Models\Facture;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Carbon\Carbon;







class AdminController extends Controller
{

    public function dashboardView()
    {
        return view('admin.dashboard');
    }

    public function loginform()
    {
        if (auth()->check()) {
            return redirect()->route('admin.products');
        }
        return view('admin.login');
    }

    public function showUser($idUser)
    {
        $user = User::findOrFail($idUser);

        if (!$user) {
            abort(404, 'User not found');
        }

        
        $commands = $user->commandes; //relation 

        return view('admin.profile', compact('user', 'commands'));
    }


    public function products()
    {

        $selected = 1;
        $products = Article::has('categorie')->get();
        $categories = Categorie::get();
        //return $products;

        return view('admin.products', compact('products', 'categories', 'selected'));
    }

    public function showProduct($id)
    {
        $product = Article::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'product not found.');
        }
        $categories = Categorie::get();
        $marques = Marque::get();
        $tags = Tag::get();
        $props = Propriete::get();
        $fourni = Fournisseur::get();
        //return $product->proprietes;
        return view('admin.showProduct' , compact('product','categories','marques','tags', 'props', 'fourni'));
    }

    public function categoryFilter(Categorie $categorie) //drop down menu that has categories 
    {   
        $categories = Categorie::get();
        $products = $categorie->articles()->get();
        return view('admin.products', compact('products', 'categories'));
    }

    public function clickedCategory(Request $request)
    {
        $selected = $request->idCategory;
        $categories = Categorie::get();
        $products = Article::with('categorie')->where('id', $selected)->get();
        return view('admin.products', compact('products', 'categories', 'selected'));
    }




    public function editProduct($id)
    {   
        $product = Article::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'product not found.');
        }
        $categories = Categorie::get();
        $marques = Marque::get();
        $tags = Tag::get();
        $props = Propriete::get();
        $fourni = Fournisseur::get();
        //  return $product->proprietes;
        return view('admin.editProduct', compact('product','categories','marques','tags', 'props', 'fourni')); 
    }




public function updateProduct(Request $request , $id)
    {

        $request->validate([
            'designation_article' => 'required',
            'description_article' => 'required',
            'prix_article' => 'required|numeric',
            'taux_remise' => 'nullable|numeric',
            'taux_tva' => 'required|numeric',
            'quantite_stock' => 'required|integer',
            'fournisseur_id' => 'required|exists:fournisseurs,id',
            'marque_id' => 'required|exists:marques,id',
            'categorie_id' => 'required|exists:categories,id',
            'tag_ids' => 'array',
            'property_ids' => 'array',
            'property_values' => 'required|array',
            'property_values.*' => 'required',
            'image_article' => 'image',

            
        ]);

        // Retrieve the product
        $product = Article::findOrFail($id);
        if (!$product) {
            return redirect()->back()->with('error', 'product not found.');
        }
        
        // Update the basic product information
        $product->designation_article = $request->input('designation_article');
        $product->description_article = $request->input('description_article');
        $product->prix_article = $request->input('prix_article');
        $product->taux_remise = $request->input('taux_remise');
        $product->taux_tva = $request->input('taux_tva');
        $product->quantite_stock = $request->input('quantite_stock');
        $product->fournisseur_id = $request->input('fournisseur_id');
        $product->marque_id = $request->input('marque_id');
        $product->categorie_id = $request->input('categorie_id');


        if ($request->hasFile('image_article')) {
            $img = $request->file('image_article');
            if ($img->isValid()) {
                // Get the current image path
                $currentImagePath = $product->image_article;
    
                // Delete the current image from storage
                Storage::disk('public')->delete($currentImagePath);
    
                // Delete the image file from the public directory
                $publicImagePath = public_path($currentImagePath);
                File::delete($publicImagePath);
    
                // Upload the new image
                $imgName = $img->getClientOriginalName();
                $imgPath = $img->storeAs('images/articles', $imgName, 'public');
                $product->image_article = $imgPath;
                $img->move(public_path('images/articles'), $imgName);
            }
        }
        
        // Save the updated product information
        $product->save();
        
        // Update the tags
        $tags = $request->input('tag_ids');
        $product->tags()->sync($tags);
        // Update the product variations
        $propertyIds = $request->input('property_ids');
        $propertyValues = $request->input('property_values');

        if (!empty($propertyIds) && !empty($propertyValues)) {
            $variations = [];
            foreach ($propertyIds as $index => $propertyId) {
                $variations[$propertyId] = ['valeur' => $propertyValues[$index]];
            }
            $product->proprietes()->sync($variations);
        }
    
        // Save the updated product information
        $product->save();
        //redirect 
        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');

    }


    public function softDeleteProduct ($id)
    {
        $product = Article::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

    if ($product) {
        // Perform soft delete
        $product->delete();
    

        // Set a success flash message
        Session::flash('success', 'Product deleted successfully.');
    }

    // Redirect back to the product list or any other desired page
    return redirect()->route('admin.products');
    }

    public function deletedProducts()
    {
        $products = Article::with('categorie')
                ->whereHas('categorie', function ($query) {
                    $query->whereNull('deleted_at');
                })
                ->onlyTrashed()
                ->get();
        return view('admin.deletedProducts', compact('products'));

    }

    public function restoreProduct($id)
    {
        $product = Article::withTrashed()
        ->where('id', $id)
        ->first();

    if ($product) {
        $product->restore();
        // Product successfully restored
        return redirect()->route('admin.products')->with('success', 'Product restored successfully');
    } else {
        // Product not found
        return redirect()->route('admin.products')->with('error', 'Product not found');
    }

    }

    public function hardDeleteProduct($id)
    {
        $product = Article::withTrashed()
        ->where('id', $id)
        ->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

    if ($product) {
        // delete image 
        $currentImagePath = $product->image_article;
        
        // Delete the current image from storage
        Storage::disk('public')->delete($currentImagePath);

        // Delete the image file from the public directory
        $publicImagePath = public_path($currentImagePath);
        File::delete($publicImagePath);       
        $product->forceDelete();
        // Product successfully hard deleted
        return redirect()->back()->with('success', 'Product hard deleted successfully');
    } else {
        // Product not found
        return redirect()->back()->with('error', 'Product not found');
    }
    }

    


    public function addProduct()
    {

        $categories = Categorie::get();
        $marques = Marque::get();
        $tags = Tag::get();
        $props = Propriete::get();
        $fourni = Fournisseur::get();
       // return $product->;
        return view('admin.addProduct', compact('categories','marques','tags', 'props', 'fourni')); 



    }
    public function storeProduct(Request $request)
    {
        // Validate
        $validatedData = $request->validate([
            'designation_article' => 'required|string|max:255|unique:articles',
            'description_article' => 'required|string',
            'image_article' => 'required',
            'prix_article' => 'required|numeric',
            'taux_remise' => 'required|numeric',
            'taux_tva' => 'required|numeric',
            'quantite_stock' => 'required|integer',
            'fournisseur_id' => 'required|exists:fournisseurs,id',
            'marque_id' => 'required|exists:marques,id',
            'categorie_id' => 'required|exists:categories,id',
            'property_values' => 'required|array',
            'property_values.*' => 'required',
        ]);


        $product = new Article();
        $product->designation_article = $request->input('designation_article');
        $product->description_article = $request->input('description_article');
        $product->categorie_id = $request->input('categorie_id');
        $product->marque_id = $request->input('marque_id');
        $product->prix_article = $request->input('prix_article');
        $product->taux_remise = $request->input('taux_remise');
        $product->taux_tva = $request->input('taux_tva');
        $product->quantite_stock = $request->input('quantite_stock');
        $product->fournisseur_id = $request->input('fournisseur_id');
        // Upload and store the product image if provided
        if ($request->hasFile('image_article')) {
            $img = $request->file('image_article');
            if ($img->isValid()) {
                
                $imgName = $img->getClientOriginalName();
                $imgPath = $img->storeAs('images/articles', $imgName, 'public');
                $product->image_article = $imgPath;
                $img->move(public_path('images/articles'), $imgName);
            } else {
                return 'image isnt working';
            }
        }

        $product->save();

        // Attach tags to the product
        $tags = $request->input('tag_ids');
        $product->tags()->attach($tags);

        // Attach properties and values to the product
        $propertyIds = $request->input('property_ids');
        $propertyValues = $request->input('property_values');
        $variations = [];
        foreach ($propertyIds as $index => $propertyId) {
            $variations[$propertyId] = ['valeur' => $propertyValues[$index]];
        }
        $product->proprietes()->attach($variations);

        // Redirect with success flash message
        
        return redirect()->route('admin.products')->with('success', 'Product added successfully.');
    
    }


    public function categories()
    {
        $categories = Categorie::all();
        return view('admin.categories', compact('categories'));
    }

    public function showCategory($id)
    {
        $category = Categorie::find($id);

        if (!$category) {
        return redirect()->back()->with('error', 'Category not found.');
    }

    return view('admin.showCategory', compact('category'));
    }


    public function editCategory($id)
    {
    $category = Categorie::find($id);

    if (!$category) {
        return redirect()->back()->with('error', 'Category not found.');
    }

    return view('admin.editCategory', compact('category'));
    }


    public function deletedCategories()
    {
        $categories = Categorie::onlyTrashed()->get();
       
        return view('admin.deletedCategories', compact('categories'));

    }

    public function restoreCategory($id)
    {
        $categorie = Categorie::withTrashed()->findOrFail($id);
        if (!$categorie) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        // Restore the category
        $categorie->restore();
        $categorie->articles()->restore();

    
        // You can return a success message or redirect to a different page
        return redirect()->route('admin.categories')->with('success', 'Category restored successfully');
    
    }

    public function hardDeleteCategory($id)
    {
        $categorie = Categorie::withTrashed()
        ->where('id', $id)
        ->first();

        if (!$categorie) {
            return redirect()->back()->with('error', 'Category not found.');
        }
        if ($categorie) {
        // delete image 
        $currentImagePath = $categorie->image_categorie;
       
        
        // Delete the current image from storage
        Storage::disk('public')->delete($currentImagePath);

        // Delete the image file from the public directory
        $publicImagePath = public_path($currentImagePath);
        File::delete($publicImagePath);       
        $categorie->forceDelete();
        // categorie successfully hard deleted
        return redirect()->back()->with('success', 'categorie hard deleted successfully');
    } else {
        // categorie not found
        return redirect()->back()->with('error', 'categorie not found');
    }
    }




    public function updateCategory(Request $request , $id)
    {
        $request->validate([
            'nom_categorie' => 'required',
            'description_categorie' => 'required',
            'image_categorie' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        // Retrieve the category
        $category = Categorie::findOrFail($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        // Update the category information
        $category->nom_categorie = $request->input('nom_categorie');
        $category->description_categorie = $request->input('description_categorie');

        if ($request->hasFile('image_categorie')) {
            $img = $request->file('image_categorie');
            if ($img->isValid()) {
                // Get the current image path
                $currentImagePath = $category->image_categorie;
    
                // Delete the current image from storage
                Storage::disk('public')->delete($currentImagePath);
    
                // Delete the image file from the public directory
                $publicImagePath = public_path($currentImagePath);
                File::delete($publicImagePath);
    
                // Upload the new image
                $imgName = $img->getClientOriginalName();
                $imgPath = $img->storeAs('images/articles', $imgName, 'public');
                $category->image_categorie = $imgPath;
                $img->move(public_path('images/articles'), $imgName);
            }
        }
        $category->save();

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');



        
    }


    public function addCategory(Request $request)
    {
        return view('admin.addCategory');
    }


    public function storeCategory(Request $request)
    {
        // validation
        $validatedData = $request->validate([
            'nom_categorie' => 'required|string|max:255|unique:categories',
            'description_categorie' => 'required|string',
            'image_categorie' => 'required|image',
        ]);
        // Upload and store the product image if provided
        if ($request->hasFile('image_categorie')) {
            $img = $request->file('image_categorie');
            if ($img->isValid()) {
                
                $imgName = $img->getClientOriginalName();
                $imgPath = $img->storeAs('images/articles', $imgName, 'public');
                $img->move(public_path('images/articles'), $imgName);
            } else {
                return 'image isnt working';
            }
        }else
        {
            return 'image isnt working';
        }
        $category = Categorie::create(
            [
                'nom_categorie' => $request->nom_categorie,
                'description_categorie' => $request->description_categorie,
                'image_categorie' => $imgPath,
            ]
        );
        return redirect()->route('admin.categories')->with('success', 'Category Added successfully.');
    }


    public function softDeleteCategory($id)
    {
        $category = Categorie::find($id);

    if (!$category) {
        return redirect()->back()->with('error', 'Category not found.');
    }

        // Delete the category from the database
    $category->delete();

    return redirect()->route('admin.categories')->with('success', 'Category deleted successfully.');

    }




    public function properties()
    {   
        $props = Propriete::get();

        return view('admin.properties' , compact('props'));
    }


    public function addProperty ()
    {
        return view('admin.addProperty');
    }


    public function storeProperty(Request $request)
{
    $validatedData = $request->validate([
        'libelle_propriete' => 'required|unique:proprietes',
        'description_propriete' => 'required',
    ]);

    // Create the property
    $property = Propriete::create($validatedData);

    if ($property) {
        return redirect()->route('admin.properties')->with('success', 'Property added successfully.');
    } else {
        return redirect()->route('admin.properties')->with('error', 'Failed to add property. Please try again.');
    }
}


    public function deleteProperty($id)
{
    $property = Propriete::findOrFail($id);

    // Perform additional checks or operations before deleting the property
    if (!$property) {
        // Custom condition or operation
        return redirect()->route('admin.properties')->with('error', 'Cannot delete property.');
    }

    $property->delete();

    return redirect()->route('admin.properties')->with('success', 'Property deleted successfully.');
}



    public function updateProperty(Request $request, $id)
    {
        $property = Propriete::findOrFail($id);
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }
        $request->validate([
            'libelle_propriete' => 'required',
            'description_propriete' => 'required',
        ]);
        $property->update([
            'libelle_propriete' => $request->libelle_propriete,
            'description_propriete' => $request->description_propriete,
        ]);
        return redirect()->route('admin.properties')->with('success', 'Property updated successfully.');
        
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }


    public function editUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'User not found.');
        }
        $villes = Ville::all();
        $privileges = Privilege::all();
        return view('admin.editUser', compact('user','villes','privileges'));
    }

    public function updateUser(Request $request , $id)
    {   
        
        $request->validate([
            'email' => 'required|email',
            'identifiant_utilisateur' => 'required',
            'prenom_utilisateur' => 'required',
            'nom_utilisateur' => 'required',
            'sexe_utilisateur' => ['required', Rule::in(['homme', 'femme'])],
            'telephone_utilisateur' => 'required',
            'adresse_utilisateur' => 'required',
            'ville_id' => 'required|exists:villes,id',
            'privilege_id' => 'required|exists:privileges,id',
            // Add validation rules for other fields as needed
        ]);

        $user = User::findOrFail($id);
        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'User not found.');
        }
        $user->email = $request->input('email');
        $user->identifiant_utilisateur = $request->input('identifiant_utilisateur');
        $user->prenom_utilisateur = $request->input('prenom_utilisateur');
        $user->nom_utilisateur = $request->input('nom_utilisateur');
        $user->sexe_utilisateur = $request->input('sexe_utilisateur');
        $user->telephone_utilisateur = $request->input('telephone_utilisateur');
        $user->adresse_utilisateur = $request->input('adresse_utilisateur');
        $user->ville_id = $request->input('ville_id');
        $user->privilege_id = $request->input('privilege_id');
        $user->carteBancaire->numero_carte_bancaire=$request->input('numero_carte_bancaire');
        $user->carteBancaire->date_expiration_carte_bancaire=$request->input('date_expiration_carte_bancaire');
        if ($request->hasFile('image_utilisateur')) {
            $img = $request->file('image_utilisateur');
            if ($img->isValid()) {
                // Get the current image path
                $currentImagePath = $user->image_utilisateur;
    
                // Delete the current image from storage
                Storage::disk('public')->delete($currentImagePath);
    
                // Delete the image file from the public directory
                $publicImagePath = public_path($currentImagePath);
                File::delete($publicImagePath);
    
                // Upload the new image
                $imgName = $img->getClientOriginalName();
                $imgPath = $img->storeAs('images/utilisateurs', $imgName, 'public');
                $user->image_utilisateur = $imgPath;
                $img->move(public_path('images/utilisateurs'), $imgName);
            }
        }
        $user->save();
        return redirect()->route('admin.users')->with('success', 'User updated successfully');

    
    
    }

    public function deleteUser(User $user)
    {
    if (!$user) {
        return redirect()->route('admin.users')->with('error', 'User not found');
    }

    if ($user->commands()->count() > 0) {
        return redirect()->route('admin.users')->with('error', 'User has associated commands and cannot be deleted');
    }

    $user->delete();

    return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }






    public function tags()
    {       
        $tags = Tag::get();

        return view('admin.tags' , compact('tags'));

    }



    public function addTag ()
    {
        return view('admin.addTag');
    }


    public function storeTag(Request $request)
{
    $validatedData = $request->validate([
        'libelle_tag' => 'required|unique:tags',
        'designation_tag' => 'required',
    ]);

    // Create the TAg
    $tag = Tag::create($validatedData);

    if ($tag) {
        return redirect()->route('admin.tags')->with('success', 'Tag added successfully.');
    } else {
        return redirect()->route('admin.tags')->with('error', 'Failed to add Tag. Please try again.');
    }
}


    public function deleteTag($id)
{
    $tag = Tag::findOrFail($id);

    // Perform additional checks or operations before deleting the property
    if (!$tag) {
        return redirect()->route('admin.tags')->with('error', 'Cannot delete property.');
    }

    $tag->delete();

    return redirect()->route('admin.properties')->with('success', 'Property deleted successfully.');
}



    public function updateTag(Request $request, $id)
    {
        
        $tag = Tag::findOrFail($id);
        if (!$tag) {
            return redirect()->route('admin.tags')->with('error', 'Tag not found.');
        }
        $request->validate([
            'libelle_tag' => 'required|unique:tags,libelle_tag,' . $tag->id,
            'designation_tag' => 'required',
        ]);
        $tag->update([
            'libelle_tag' => $request->libelle_tag,
            'designation_tag' => $request->designation_tag,
        ]);
        return redirect()->route('admin.tags')->with('success', 'Tag updated successfully.');
        
    }


    public function orders()
    {
        $orders = Commande::get();
       
                $tdClasses = [
            1 => 'order-pending',
            2=> 'order-success',
            3 => 'order-cancelled',
            
        ];
        $types = EtatCommande::get();
        
        
        return view('admin.orders' , compact('orders' , 'tdClasses' , 'types'));
    }


    public function updateOrder(Request $request , $id)
    {   
        // Get the order and update its status
        $order = Commande::findOrFail($id);
        if (!$order) {
            return redirect()->route('admin.orders')->with('error', 'Order not found.');
        }
        $order->etat_commande_id = $request->etat_commande_id;
        $order->save();

        // Redirect or perform any other logic as needed
        return redirect()->route('admin.orders')->with('success', 'Order status updated successfully.');

    }





    public function userOrder(User $user)
    {
        $orders = $user->commandes;
        $tdClasses = [
            1 => 'order-pending',
            2=> 'order-success',
            3 => 'order-cancelled',
            
        ];
        $types = EtatCommande::get();


        
        return view('admin.orders' , compact('orders' , 'tdClasses' ,'types'));
    }

    public function orderDetails($id)
    {
        $order = Commande::find($id);
        //return $order->livraison;
        $totalQuantite = 0;
        $total_dial_sous_total=0;
        $tax= 0;
        $total = $order->prix_total_toutes_taxes_comprises_commande;
        

        foreach ($order->commandeDetails as $commandeDetail) {
            $totalQuantite += $commandeDetail->quantite_commande;
            $total_dial_sous_total += $commandeDetail->sous_total;  
            $tax += $commandeDetail->article->taux_tva;
            //return $commandeDetail;
        }
        if(!$order->commandeDetails->count() == 0)
        {
            $tax = $tax/$order->commandeDetails->count() * 100;
        }
        $orderDate = Carbon::parse($order->date_commande);
        $maybeDate = $orderDate->addDays(7);
        $maybeDate = $maybeDate->format('Y-m-d');
        
        
        if ($order->livraison && $order->livraison->frais_livraison) {
            $total = $order->livraison->frais_livraison + $order->prix_total_toutes_taxes_comprises_commande;
        } else {
            $total = $order->prix_total_toutes_taxes_comprises_commande;
        }
        
        

        return view('admin.showOrder' , compact('order' , 'totalQuantite' , 'total_dial_sous_total','tax','maybeDate' , 'total'));
    }

    public function articleCommande($id)
    {
        $product = Article::find($id);
        $ids= $product->commandDetails->pluck("commande_id")->toArray();
        $orders = Commande::whereIn('id', $ids)->get();
        $tdClasses = [
            1 => 'order-pending',
            2=> 'order-success',
            3 => 'order-cancelled',
            
        ];
        $types = EtatCommande::get();

        return view('admin.orders' , compact('orders' , 'tdClasses', 'types'));        
    }




    public function deleteOrder($id)
    {
        $order = Commande::find($id);
        if($order)
        {
            $order->delete();
            return redirect()->route('admin.orders')->with('success', 'Order Deleted successfully.');
 
        }else
        {
            return redirect()->route('admin.orders')->with('error', 'Order not found.');

        }
    }

    public function factures ()
    {
        $factures = Facture::get();
        //return $factures[0]->commande->user;
        $tdClasses = [
            'non valid' => 'order-pending',
            'valid'=> 'order-success',
            
            
        ];
        $types = ['non valid', 'valid'];

        return view('admin.factures' , compact('factures', 'tdClasses' , 'types' ));
    }

    public function updateFacture(Request $request , $id)
    {   
       // Get the order and update its status
        $fac = Facture::find($id);

        if (!$fac) {
            return redirect()->route('admin.factures')->with('error', 'Facture not found.');
        }

        $fac->etat_facture = $request->etat_facture;
        $fac->save();


        
        event(new FactureModifiee($fac));

        // Redirect or perform any other logic as needed
        return redirect()->route('admin.factures')->with('success', 'Facture status updated successfully.');


    }

    public function deleteFacture($id)
    {
        $facture = Facture::findOrFail($id);

        // Check if the facture has a facture
        if ($facture) {
            // Delete the facture associated with the facture
            $facture->delete();
            return redirect()->route('admin.factures')->with('success', 'facture Deleted successfully.');

            
        }else{
            return redirect()->route('admin.factures')->with('error', 'facture not found.');

        }
    }

    public function generateFacture($id)
    {
        $order= Commande::find($id);
        if (!$order) {
            return redirect()->route('admin.orders')->with('error', 'Order not found.');
        }

        $descriptionFacture = 'Facture of ' . $order->description_commande;

        $facture = Facture::create([
        'date_facture' => now(), // Set the date of the facture to the current date and time
        'description_facture' => $descriptionFacture , // Set the description of the facture
        'commande_id' => $id, // Set the ID of the associated commande
        'etat_facture' => 'non valid', // Set the initial state of the facture (e.g., Pending, Paid, etc.)
    ]);
    if( $facture)
    {
        return redirect()->route('admin.factures')->with('success', 'facture created successfully.');

    }else
    {
        return redirect()->route('admin.orders')->with('error', 'facture not created.');

    }



    }

    public function mails()
    {
        $mails = Contact::get();
        return view ('admin.contacts',compact('mails'));
    }

    public function deleteMail($id)
    {
        $mail = Contact::find($id);
        if(!$mail)
        {
            return redirect()->route('admin.mails')->with('error','mail not found');
        }
        $mail->delete();
        return redirect()->route('admin.mails')->with('success','mail Deleted');

    }

}
