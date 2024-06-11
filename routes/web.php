<?php

use App\Models\Ville;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavBarController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommandeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


/*
|--------------------------------------------------------------------------
| PlayMor main routes
|--------------------------------------------------------------------------
|
*/


Route::get('/productTestView', [NavBarController::class, 'productTestView'])->name('testing'); // testing the product page 
Route::get('/categorieTestView', [NavBarController::class, 'categorieTestView'])->name('categorieTesting');

Route::get('/', [NavBarController::class, 'index'])->name('home');
Route::get('/categories', [NavBarController::class, 'categories'])->name('categories');



Route::get('/articles', [ArticleController::class, 'showAllProducts'])->name('showAllProducts');



// A gérer
Route::get('/categorie/{id}', [ArticleController::class, 'showCategoryProducts'])->name('categories.showproducts');



// Route::get('/articles', [ArticleController::class, 'articles'])->name('articles');

Route::get('/articles/{id}', [ArticleController::class, 'showArticle'])->name('article');

Route::get('/categories/{id}', [NavBarController::class, 'showCategory'])->name('category.show');


Route::get('/checkout', [NavBarController::class, 'checkout'])->name('checkout');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [NavBarController::class, 'aboutUs'])->name('about');

Route::get('/product/search', [ProductController::class, 'search'])->name('product.search'); //search like% label and join with category name % 

Route::get('/product/new', [ProductController::class, 'showNewProducts'])->name('product.new'); //show new products

Route::get('/product/promotion', [ProductController::class, 'searchPromotionProducts'])->name('product.promotion'); //9ra smiya






/*
|--------------------------------------------------------------------------
| PlayMor Admin  routes
|--------------------------------------------------------------------------
|
*/
Route::middleware(['admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboardView'])->name('dashboard'); //to test styling and template of the dashboard
        
    Route::get('/admin/dashboard/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/dashboard/product/add', [AdminController::class, 'addProduct'])->name('admin.product.add');
    Route::post('/admin/dashboard/product/store', [AdminController::class, 'storeProduct'])->name('admin.product.store');
    Route::get('/admin/dashboard/product/edit/{id}', [AdminController::class, 'editProduct'])->name('admin.product.edit');
    Route::PATCH('/admin/dashboard/product/update/{id}', [AdminController::class, 'updateProduct'])->name('admin.product.update');
    Route::delete('/admin/dashboard/product/softDelete/{id}', [AdminController::class, 'softDeleteProduct'])->name('admin.product.softDelete');
    Route::get('/admin/dashboard/products/restore', [AdminController::class, 'deletedProducts'])->name('admin.products.deleted'); 
    Route::get('/admin/dashboard/product/restore/{id}', [AdminController::class, 'restoreProduct'])->name('admin.product.restore');
    Route::delete('/admin/dashboard/products/{id}/hardDelete', [AdminController::class, 'hardDeleteProduct'])->name('admin.product.hardDelete');
    Route::get('/admin/dashboard/product/show/{id}', [AdminController::class, 'showProduct'])->name('admin.product.show');


        //category routes

    Route::get('/admin/dashboard/category/show/{id}', [AdminController::class, 'showCategory'])->name('admin.category.show');
    Route::delete('/admin/dashboard/category/softDelete/{id}', [AdminController::class, 'softDeleteCategory'])->name('admin.category.softDelete');
    //Route::get('/admin/dashboard/restoreCategories', [AdminController::class, 'softCategories'])->name('admin.softCategory');
    Route::get('/admin/dashboard/category/restore', [AdminController::class, 'deletedCategories'])->name('admin.category.deleted');
    Route::get('/admin/dashboard/category/restore/{id}', [AdminController::class, 'restoreCategory'])->name('admin.category.restore');
    Route::delete('/admin/dashboard/category/{id}/hardDelete', [AdminController::class, 'hardDeleteCategory'])->name('admin.category.hardDelete');
    Route::get('/admin/dashboard/products/filter/{categorie}', [AdminController::class, 'categoryFilter'])->name('categoryFilter');
    Route::get('/admin/dashboard/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/dashboard/category/edit/{id}', [AdminController::class, 'editCategory'])->name('admin.category.edit');
    Route::PATCH('/admin/dashboard/category/update/{id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
    Route::post('/admin/dashboard/category/store', [AdminController::class, 'storeCategory'])->name('admin.category.store');
    Route::get('/admin/dashboard/category/add', [AdminController::class, 'addCategory'])->name('admin.category.add');

        //mail routes

    Route::get('/admin/dashboard/mails', [AdminController::class, 'mails'])->name('admin.mails');
    Route::delete('/admin/dashboard/mail/delete/{id}', [AdminController::class, 'deleteMail'])->name('admin.mail.delete');
    
        //prop routes for admin
    Route::get('/admin/dashboard/properties', [AdminController::class, 'properties'])->name('admin.properties');
    Route::post('/admin/dashboard/property/store', [AdminController::class, 'storeProperty'])->name('admin.property.store');
    Route::get('/admin/dashboard/properties/add', [AdminController::class, 'addProperty'])->name('admin.property.add');
    Route::delete('/admin/dashboard/property/delete/{id}', [AdminController::class, 'deleteProperty'])->name('admin.property.delete');
    Route::PATCH('/admin/dashboard/property/update/{id}', [AdminController::class, 'updateProperty'])->name('admin.property.update');

        //user routes for admin 
    Route::get('/admin/dashboard/users', [AdminController::class, 'users'])->name('admin.users');
    Route::delete('/admin/dashboard/user/delete/{user}', [AdminController::class, 'deleteUser'])->name('admin.user.delete');
    Route::get('/admin/dashboard/user/edit/{id}', [AdminController::class, 'editUser'])->name('admin.user.edit');
    Route::PATCH('/admin/dashboard/user/update/{id}', [AdminController::class, 'updateUser'])->name('admin.user.update');

        //tag routes for admin
    Route::get('/admin/dashboard/tag', [AdminController::class, 'tags'])->name('admin.tags');
    Route::post('/admin/dashboard/tag/store', [AdminController::class, 'storeTag'])->name('admin.tag.store');
    Route::get('/admin/dashboard/tag/add', [AdminController::class, 'addTag'])->name('admin.tag.add');
    Route::delete('/admin/dashboard/tag/delete/{id}', [AdminController::class, 'deleteTag'])->name('admin.tag.delete');
    Route::PATCH('/admin/dashboard/tag/update/{id}', [AdminController::class, 'updateTag'])->name('admin.tag.update');

        //order routes for admin

    Route::get('/admin/dashboard/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::delete('/admin/order/delete/{id}',[AdminController::class,'deleteOrder'])->name('admin.order.delete');
    Route::PATCH('/admin/dashboard/order/update/{id}', [AdminController::class, 'updateOrder'])->name('admin.order.update');
    Route::get('/admin/dashboard/order/edit/{id}', [AdminController::class, 'edit'])->name('admin.order.edit');
    Route::get('/admin/dashboard/order/generate/{id}', [AdminController::class, 'generateFacture'])->name('admin.order.generate');

    Route::get('/admin/dashboard/order/filter/{user}', [AdminController::class, 'userOrder'])->name('userOrder');
    Route::get('/admin/dashboard/order/show/{id}', [AdminController::class, 'orderDetails'])->name('orderDetails');
    Route::get('/admin/dashboard/order/product/{id}', [AdminController::class, 'articleCommande'])->name('articleCommande');
    Route::post('/admin/dashboard/orders/{id}/update', [AdminController::class, 'updateOrder'])->name('updateOrder');
        //facture routes 
    Route::get('/admin/dashboard/factures', [AdminController::class, 'factures'])->name('admin.factures');
    Route::delete('/admin/dashboard/order/delete/{id}', [AdminController::class, 'deleteFacture'])->name('admin.facture.delete');
    Route::post('/admin/dashboard/facture/update/{id}', [AdminController::class, 'updateFacture'])->name('admin.facture.update');


});











// Route::group(['middleware' => 'admin'], function () {
//     // Define your admin routes here
   
// });

// // Routes for users
// Route::group(['middleware' => 'user'], function () {
//     // Define your user routes here
//     Route::get('/profile', 'UserController@profile')->name('profile');
// });


Route::middleware(['auth' ,'verified'])->group(function(){
    Route::resource('/panier' , PanierController::class);
    Route::get('/panier',[PanierController::class,'index'])->name('panier');
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');


    Route::patch('/profile',[ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile',[ProfileController::class,'destroy'])->name('profile.delete');
});

Route::post('/about',[NavBarController::class, 'addComment'])->name('comment.create');


Route::get('/chercher.barreNavigation' , [NavBarController::class , 'chercherProduit'])->name('chercher.barreNavigation');


Route::middleware(['auth' , 'verified'])->group(function(){

    Route::get('/commande' , [CommandeController::class, 'afficherInfoCommande'])->name('afficherInfoCommande');
    Route::post('/commande' , [CommandeController::class, 'remplissageInfoCommande'])->name('remplissageInfoCommande');
    Route::post('/passercommande' , [CommandeController::class , 'passerCommande'])->name('passerCommande');
});

Route::fallback(function(){
    return view('playmor.pageIntrouvable.pageIntrouvable');
});



// Pour la gestion des utilisateurs ayant un email non vérifié

route::get('/emailnonverifie', function(){
    return view('playmor.emailNonVerifie');
})->name('emailNonVerifie');

// Les routes pour la vérification de l'email

// A ne pas oublier d'ajouter le middleware verified
// Route::get('/profile', function () {
//     // Only verified users may access this route...
// })->middleware(['auth', 'verified']);

Route::get('/email/verify', function () {
    return view('palymor.verificationEmail.verificationEmail');
})->middleware(['auth', 'signed'])->name('verification.notice');




 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');