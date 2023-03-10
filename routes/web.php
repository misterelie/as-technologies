<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [FrontController::class, 'index'])->name("front.index");
Route::get('/service', [FrontController::class, 'service'])->name("front.service");
Route::get('/nos-realisations', [FrontController::class, 'realisation'])->name("front.realisation");
Route::get('/nos-produits', [FrontController::class, 'nos_products'])->name("front.nos-produits");
Route::get('/front/contact', [FrontController::class, 'contact'])->name("front/contact");
Route::get('/front/client', [FrontController::class, 'client'])->name("front/client");
Route::get('/front.presentation', [FrontController::class, 'about'])->name("front.presentation");
Route::get('/devis', [FrontController::class, 'devis'])->name("front.devis");
Route::post('/store.devis', [FrontController::class, 'save_devis'])->name("store.devis");
Route::get('/detail_service/{id}', [FrontController::class, 'detail_service'])->name("front.detail_service");
Route::get('/detail/produit/{id}', [FrontController::class, 'detail']);


//* Route AJAX
Route::get('/getSpecificates', [FrontController::class, 'service_specificite']);
Route::get('/getProduit', [FrontController::class, 'viewByCategory']);


//SECTION ADMIN
//store contact message
Route::post('/message_contact', [AdminController::class, 'messagecontact'])->name("message_contact");
Route::delete('/delete.message/{id}', [AdminController::class, 'destroy_message'])->name('delete.message');
//Messages des contacts
Route::get('/message', [AdminController::class, 'all_messages'])->name("admin.messages.all_message");
Route::get('/index/admin', [AdminController::class, 'dashboard'])->name("admin.index");
Route::get('/admin/service', [AdminController::class, 'service_create'])->name("admin.service.index");
Route::get('/admin/service/create', [AdminController::class, 'form_service'])->name("admin.service.create");
//store service
Route::post('/store.service', [AdminController::class, 'store_service'])->name("store.service");
Route::get('/edit', [AdminController::class, 'edit_service']);
Route::put('/edit/{service}', [AdminController::class, 'update'])->name('service.update');
Route::delete('/delete.service/{service}', [AdminController::class, 'delete'])->name('delete.service');
//section client
Route::get('/client', [AdminController::class, 'liste_client'])->name("admin.client.liste_client");
Route::get('/editclient', [AdminController::class, 'edit_client']);
Route::post('/store.client', [AdminController::class, 'store_client'])->name("store.client");
Route::put('/editclient/{client}', [AdminController::class, 'update_client'])->name('client.update');
Route::delete('/delete.client/{client}', [AdminController::class, 'delete_client'])->name('delete.client');
//section realisation
Route::get('/realisation', [AdminController::class, 'realisa_liste'])->name("admin.realisation.liste_realisation");
Route::post('/store.realisation', [AdminController::class, 'store_realisation'])->name("store.realisation");
Route::get('/editrealisation/{id}', [AdminController::class, 'edit_realisation']);
Route::put('/editrealisation/{realisation}', [AdminController::class, 'update_realisation'])->name('realisation.update');
Route::delete('/delete.realisation/{realisation}', [AdminController::class, 'destroy_realisation'])->name('delete.realisation');

//adresse
Route::get('/contact', [AdminController::class, 'contact'])->name("admin.contact.index");
Route::post('/store.contact', [AdminController::class, 'save_contact'])->name("store.contact");
Route::get('/editcontact/{id}', [AdminController::class, 'edit_contact']);
Route::put('/editcontact/{adresse}', [AdminController::class, 'update_contact'])->name('contact.update');
Route::delete('/delete.contact/{adresse}', [AdminController::class, 'destroy_contact'])->name('delete.contact');

//section presentation
Route::get('/presentation', [AdminController::class, 'vu_about'])->name("admin.about.index");
Route::post('/store.about', [AdminController::class, 'save_about'])->name("store.about");
Route::put('/about.update/{about}', [AdminController::class, 'update_about'])->name('about.update');
Route::delete('/about.delete/{about}', [AdminController::class, 'destroy_about'])->name('about.delete');

//Banniere
Route::get('/banniere', [AdminController::class, 'vu_banniere'])->name("admin.banniere.add_banniere");
Route::post('/store/banniere', [AdminController::class, 'save_banniere'])->name("store/banniere");
Route::put('/banniere.update/{banniere}', [AdminController::class, 'update_bann'])->name('banniere.update');
Route::delete('/delete.banniere/{banniere}', [AdminController::class, 'delete_bann'])->name('delete.banniere');


//section projet
Route::get('/projet', [AdminController::class, 'liste_projet'])->name("admin.projet.add_project");
Route::post('/store.projet', [AdminController::class, 'store_projet'])->name("store.projet");
Route::put('/projet.update/{projet}', [AdminController::class, 'projet_update'])->name('projet.update');
Route::delete('/delete.projet/{projet}', [AdminController::class, 'delete_projet'])->name('delete.projet');

//section demande de devis
Route::get('/demande-devis', [AdminController::class, 'demande_devis'])->name("admin.devis.demande_devis");
Route::delete('/delete.devis/{devis}', [AdminController::class, 'deletedevis'])->name('delete.devis');
Route::post('/store.specificite', [AdminController::class, 'save_specificite_service'])->name("store.specificite");
Route::get('/specificites', [AdminController::class, 'ajout_sepcificite'])->name("admin.devis.specificite");
Route::put('/update.specificite/{specificite}', [AdminController::class, 'update_specificite'])->name('update.specificite');
Route::delete('/delete/specificite/{specificite}', [AdminController::class, 'destroy_specificite']);


//section marque
Route::get('/liste/marques', [AdminController::class, 'add_marque']);
Route::get('/liste/produits', [AdminController::class, 'add_product']);
Route::get('/liste/categories', [AdminController::class, 'add_category']);
Route::post('/save.maruque', [AdminController::class, 'store_marque'])->name("save.maruque");
Route::put('/marque.update/{marque}', [AdminController::class, 'updatemarque'])->name('marque.update');
Route::delete('/delete/marque/{marque}', [AdminController::class, 'deletemarque']);

//section catégorie
Route::post('/save/categorie', [AdminController::class, 'store_categorie']);
Route::put('/categorie/update/{categorie}', [AdminController::class, 'updatecategoirie']);
Route::delete('/delete/categorie/{categorie}', [AdminController::class, 'destroy_category']);

//section produit
Route::post('/save/product', [AdminController::class, 'store_products']);
Route::put('/produit/update/{produit}', [AdminController::class, 'update_product']);
Route::delete('/delete/produit/{produit}', [AdminController::class, 'delete_produit']);

//users admin
Route::get('/utilisateurs', [AdminController::class, 'addusers']);
Route::post('store/users', [AdminController::class, 'save_user']);
Route::delete('/delete/user/{utilisateur}', [AdminController::class, 'delete_user']);
Route::put('/utilisateur/update/{utilisateur}', [AdminController::class, 'update_user']);
