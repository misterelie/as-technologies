<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\User;
use App\Models\About;
use App\Models\Client;
use App\Models\Marque;
use App\Models\Projet;
use App\Models\Adresse;
use App\Models\Contact;


use App\Models\Produit;
use App\Models\Service;
use App\Models\Banniere;
use App\Models\Categorie;
use App\Models\Realisation;
use App\Models\Specificite;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class AdminController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
  }
    public function dashboard(){
        $services = Service::count();
        $produits = Produit::count();
        $clients = Client::count();
        $devis = Devi::count();
        return view('admin.index', compact('services', 'produits', 'clients', 'devis'));
    }

    // contact message
    public function messagecontact(Request $request){
        //dd($request->all());
        $request->validate([
            "email" => "required|email",
            "nom" => "required",
            "objet" => "required",
            "message" => 'required',
            "telephone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
        $contact = new Contact();
        $contact->email = $request->email;
        $contact->objet = $request->objet;
        $contact->message = $request->message;
        $contact->nom = $request->nom;
        $contact->telephone = $request->telephone;
        $contact->save();
        return redirect()->back()->with('success', 'Félicitations! Votre message a été envoyé avec succès. Notre équipe vous contactera éventuellement. ');
    }
    //TRAITEMENT SERVICE
    public function service_create(){
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function form_service(){
        return view('admin.service.create');
    }

    public function store_service(Request $request){
        //dd($request->all());
        $request->validate([
            "libelle" => "required",
            "resume" => "required",
            "detail" => "nullable",
            'image_service' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service = new Service();
        $service->libelle = $request->libelle;
        $service->resume = $request->resume;
        $service->detail = $request->detail;
        if ($request->hasFile('image_service')) {
            $imag = $request->image_service;
            //dd($imag);
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ServiceImage"), $imageName);
            $service->image_service = $imageName;
        }
        $service->save();
        return redirect()->back()->with('success', 'Félicitations! service ajouté avec succès. ');
    }

    public function edit_service($id)
    {
        $service = Service::find($id);
        return redirect()->back()->with('success', compact('service'), 'Félicitations! mise à jour avec succès. ');
    }

    //MISE A JOUR SERVICE
    public function update(Request $request, Service $service)
    {
        $request->validate([
            "libelle" => "required",
            "resume" => "required",
            "detail" => "nullable",
            'image_service' => 'nullable',

        ]);
        $service->libelle = $request->libelle;
        $service->resume = $request->resume;
        $service->detail = $request->detail;
        if ($request->hasFile('image_service')) {
            $imag = $request->image_service;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ServiceImage"), $imageName);
            $service->image_service = $imageName;
        }
        $service->save();
        return back()->with("success", "Bravo, vous avez Mis à jour avec succès !");
    }

    public function delete(Service $service)
    {
        $service->delete();
        return back()->with("success", "Le service a été Supprimé avec succès !");
    }

    //SECTION CLIENT
    public function liste_client(){
        $clients = Client::all();
        return view('admin.client.liste_client', compact('clients'));
    }

    public function store_client(Request $request){
        $request->validate([
            "secteur_activity" => "required",
            "temoignage" => "required",
            'logo_client' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "nom_client" => 'required'
        ]);
        $client = new Client();
        $client->secteur_activity = $request->secteur_activity;
        $client->temoignage = $request->temoignage;
        $client->nom_client = $request->nom_client;

        if ($request->hasFile('logo_client')) {
            $imag = $request->logo_client;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ServiceImage"), $imageName);
            $client->logo_client = $imageName;
        }

        $client->save();
        return redirect()->back()->with('success', 'Félicitations! client ajouté avec succès. ');
    }

    //MODIFIER LE CLIENT
    public function edit_client($id)
    {
        $client = Client::find($id);
        return redirect()->back()->with('success', compact('client'), 'Félicitations! mise à jour avec succès. ');
    }

     //MISE A JOUR CLIENT
     public function update_client(Request $request, Client $client)
     {
         $request->validate([
            "secteur_activity" => "nullable",
            "temoignage" => "",
            'logo_client' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "nom_client" => 'nullable'
         ]);
         $client->secteur_activity = $request->secteur_activity;
         $client->temoignage = $request->temoignage;
         $client->nom_client = $request->nom_client;

         if ($request->hasFile('logo_client')) {
             $imag = $request->logo_client;
             $imageName = time() . '.' . $imag->Extension();
             $imag->move(public_path("ServiceImage"), $imageName);
             $client->logo_client = $imageName;
         }
         $client->save();
         return back()->with("success", "Vous avez mis à jour les informations du client avec succès !");
     }

    public function delete_client(Client $client)
    {
        $client->delete();
        return back()->with("success", "Le client a été bien supprimé avec succès !");
    }
     //END SECTIONCLIENT

    //SECTION REALISATION
    public function realisa_liste(){
        $realisations = Realisation::all();
        return view('admin.realisation.liste_realisation', compact('realisations'));
    }
    public function store_realisation(Request $request){
        //dd($request->all());
        $request->validate([
            "libelle" => "required",
            'photo_realisation' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $realisation = new Realisation();
        $realisation->libelle = $request->libelle;
        if ($request->hasFile('photo_realisation')) {
            $imag = $request->photo_realisation;
            //dd($imag);
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ServiceImage"), $imageName);
            $realisation->photo_realisation = $imageName;
        }
        $realisation->save();
        return redirect()->back()->with('success', 'Bravo! réalisationn ajoutée avec succès.');
    }
    //MODIFIER LE CLIENT
    public function edit_realisation($id)
    {
        $realisation = Realisation::find($id);
        return redirect()->back()->with('success', compact('realisation'), 'Félicitations! mise à jour avec succès. ');
    }
    //MISE A JOUR CLIENT
    public function update_realisation(Request $request, Realisation $realisation)
    {
        $request->validate([
            "libelle" => "nullable",
            'photo_realisation' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $realisation->libelle = $request->libelle;
        if ($request->hasFile('photo_realisation')) {
            $imag = $request->photo_realisation;
            //dd($imag);
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ServiceImage"), $imageName);
            $realisation->photo_realisation = $imageName;
        }
        $realisation->save();
        return back()->with("success", "Vous avez mis à jour les informations du client avec succès !");
    }
    public function destroy_realisation(Realisation $realisation)
    {
        $realisation->delete();
        return back()->with("success", "Le réalisation a été bien supprimée avec succès !");
    }
    //contact
    public function contact(){
        $adresses = Adresse::all();
        return view('admin.contact.index', compact('adresses'));
    }
    public function save_contact(Request $request){
        //dd($request->all());
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Adresse::class],
            'adresse' => "required",
            'lien_facebook' => "",
            'lien_youtube' => "",
            'lien_linkedin' => "",
            'phone' =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
        $adresse = new Adresse();
        $adresse->email = $request->email;
        $adresse->adresse = $request->adresse;
        $adresse->phone = $request->phone;
        $adresse->phone = $request->phone;
        $adresse->facebook = $request->facebook;
        $adresse->lien_youtube = $request->lien_youtube;
        $adresse->lien_linkedin = $request->lien_linkedin;
        $adresse->save();
        return redirect()->back()->with('success', 'Bravo ! vous avez ajouté avec succès.');
    }

    public function edit_contact($id)
    {
        $adresse = Adresse::find($id);
        return view('admin.contact.index', compact('adresse'));
    }
    public function update_contact(Request $request, Adresse $adresse)
    {
        //dd($request->all());
        $request->validate([
            'email' => ['nullable', 'string', 'email'],
            'adresse' => "required",
            'lien_facebook' => 'nullable',
            'lien_youtube' => 'nullable',
            'lien_linkedin' => 'nullable',
            'phone' =>  'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
        $adresse->email = $request->email;
        $adresse->adresse = $request->adresse;
        $adresse->phone = $request->phone;
        $adresse->lien_facebook = $request->lien_facebook;
        $adresse->lien_youtube = $request->lien_youtube;
        $adresse->lien_linkedin = $request->lien_linkedin;
        $adresse->save();
        return back()->with("success", "Vous avez mis à jour les informations du contact avec succès !");
    }
    public function destroy_contact(Adresse $adresse)
    {
        $adresse->delete();
        return back()->with("success", "Vous avez supprimé avec succès !");
    }


    //MESSAGES CONTACTS
    public function all_messages()
    {
        $messages = Contact::all();
        return view('admin.messages.all_message', compact('messages'));
    }
    public function destroy_message(Contact $id)
    {
        $id->delete();
        return back()->with("success", "Vous avez supprimé avec succès !");
    }

    //SECTION PRESENTATION
    public function vu_about(){
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }
    public function save_about(Request $request){
        //dd($request->all());
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "description" => 'required',
            "detail" => '',
        ]);
        $about = new About();
        $about->titre = $request->titre;
        $about->sous_titre = $request->sous_titre;
        $about->description = $request->description;
        $about->detail = $request->detail;
        if ($request->hasFile('about_image')) {
            $imag = $request->about_image;
            //dd($imag);
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("AboutImage"), $imageName);
            $about->about_image = $imageName;
        }
        $about->save();
        return redirect()->back()->with('success', 'Félicitations! Vous avez bien  ajouté avec succès. ');
    }
    public function update_about(Request $request, About $about)
    {
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "description" => 'required',
            "detail" => ''

        ]);
        $about->titre = $request->titre;
        $about->sous_titre = $request->sous_titre;
        $about->description = $request->description;
        $about->detail = $request->detail;
        if ($request->hasFile('about_image')) {
            $imag = $request->about_image;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("AboutImage"), $imageName);
            $about->about_image = $imageName;
        }
        $about->save();
        return back()->with("success", "Bravo, vous avez Mis à jour avec succès !");
    }

    public function destroy_about(About $about)
    {
        $about->delete();
        return back()->with("success", "Vous avez supprimé avec succès !");
    }

    //SECTION BANNIERE
    public function vu_banniere(){
        $banniere = Banniere::OrderBy('libelle')->first();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('admin.banniere.add_banniere', compact('banniere'));
    }

    public function save_banniere(Request $request){
        $request->validate([
            'libelle' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $banniere = new Banniere();
        if ($request->hasFile('libelle')) {
            $imag = $request->libelle;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("BanniereImage"), $imageName);
            $banniere->libelle = $imageName;
        }
        $banniere->save();
        return redirect()->back()->with('success', 'Félicitations! Vous avez bien  ajouté avec succès. ');
    }

    public function update_bann(Request $request, Banniere $banniere){
        $request->validate([
            'libelle' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagebanniere' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('libelle') ) {
            $imag = $request->libelle;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("BanniereImage"), $imageName);
            $banniere->libelle = $imageName;
        }

        if ($request->hasFile('imagebanniere') ) {
            $imag = $request->imagebanniere;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("BanniereImage"), $imageName);
            $banniere->imagebanniere = $imageName;
        }
        $banniere->save();
        return back()->with("success", "Bravo, vous avez Mis à jour avec succès !");
    }

    public function delete_bann(Banniere $banniere){
        $banniere->delete();
        return back()->with("success", "Le réalisation a été bien supprimée avec succès !");
    }

    //section projet
    public function liste_projet(){
        $projets = Projet::all();
        return view('admin.projet.add_project', compact('projets'));
    }
    public function store_projet(Request $request){
        //dd($request->all());
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);
        $projet = new Projet();
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->save();
        return redirect()->back()->with('success', 'Félicitations! Vous avez bien  ajouté avec succès. ');
    }
    public function projet_update(Request $request, Projet $projet){
        //dd($request->all());
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->save();
        return redirect()->back()->with('success', 'Félicitations! Vous avez mis à jour avec succès. ');
    }
    public function delete_projet(Projet $projet){
        $projet->delete();
        return back()->with("success", "Supprimé avec succès !");
    }

    //section demande de devis
    public function demande_devis(){
        $devis = Devi::all();
        $services = Service::all();
        return view('admin.devis.demande_devis', compact('devis', 'services'));
    }
    public function deletedevis(Devi $devis){
        $devis->delete();
        return back()->with("success", "Le dévis a été bien supprimée avec succès !");
    }

    public function ajout_sepcificite(){
        $specificites = Specificite::all();
       // $specificites = Specificite::with(['specificite'])->latest()->get();
        $services = Service::all();
        return view('admin.devis.specificite', compact('specificites', 'services'));
    }
    public function save_specificite_service(Request $request){
        $request->validate([
            'specifite_service' => 'required',
            'service_id' => 'required',
        ]);
        $specificite = new Specificite();
        $specificite->specifite_service = $request->specifite_service;
        $specificite->service_id = $request->service_id;
        $specificite->save();
        return redirect()->back()->with('success', 'Bravo ! Vous la spécificité avec succès.');
    }
    public function update_specificite(Request $request, Specificite $specificite)
    {
        //dd($request->all());
        $request->validate([
            "specifite_service" => "required",
            "service_id" => "",
        ]);

        // $speci = [
        //     "specifite_service" => $request->specifite_service,
        //     "service_id" => $request->service_id,
        // ];
        $specificite->specifite_service = $request->specifite_service;
        $specificite->service_id = $request->service_id;
        $specificite->save();
        return back()->with("success", "Bravo, vous avez Mis à jour avec succès !");
    }
    public function destroy_specificite(Specificite $specificite){
        $specificite->delete();
        return back()->with("success", "La specificité a été bien supprimée avec succès !");
    }

    //MARQUES
    public function add_marque(){
        $marques = Marque::all();
        return view('admin.produits.marque', compact('marques'));
    }
    public function store_marque(Request $request){
        $request->validate([
            "designation" => "required",
        ]);
        $marque = new Marque();
        $marque->designation = $request->designation;
        $marque->save();
        return redirect()->back()->with('success', 'Bravo ! Vous avez ajouté la marque avec succès.');
    } 
    public function updatemarque(Request $request, Marque $marque){
        $request->validate([
            "designation" => "required",
        ]);
        $marque->designation = $request->designation;
        $marque->save();
        return redirect()->back()->with('success', 'Bravo ! Vous avez mis à jour avec succès.');
    }
    public function deletemarque(Marque $marque){
        $marque->delete();
        return back()->with("success", "La marque a été bien supprimée avec succès !");
    }

    //CATEGORIES
    public function add_category(){
        $categories = Categorie::all();
        return view('admin.produits.category', compact('categories'));
    }
    public function store_categorie(Request $request){
        $request->validate([
            "designation" => "required",
        ]);
        $categorie = new Categorie();
        $categorie->designation = $request->designation;
        $categorie->save();
        return redirect()->back()->with('success', 'Bravo ! Vous avez ajouté la catégorie avec succès.');
    } 
    public function updatecategoirie(Request $request, Categorie $categorie){
        $request->validate([
            "designation" => "required",
        ]);
        $categorie->designation = $request->designation;
        $categorie->save();
        return redirect()->back()->with('success', 'Bravo ! Vous avez mis à jour avec succès.');
    }
    public function destroy_category(Categorie $categorie){
        $categorie->delete();
        return back()->with("success", "La catégorie a été bien supprimée avec succès !");
    }

    //PRODUITS
    public function add_product(){
        $categories = Categorie::all();
        $marques = Marque::all();
        $produits = Produit::with('marque')->latest()->get();
        $produits = Produit::with(['categorie'])->latest()->get();
        return view('admin.produits.add-produits', compact('categories', 'marques', 'produits'));
    }
    public function store_products(Request $request){
        //dd($request->all());
        $request->validate([
            "prix" => "required",
            "nom_produit" => "required",
            "resume_produit" => "required",
            "detail_produit" => "required",
            "categorie_id" => "required",
            "marque_id" => "required"
        ]);
        //file
        $produits = new Produit();
        $produits->prix = $request->prix;
        $produits->nom_produit = $request->nom_produit;
        $produits->resume_produit = $request->resume_produit;
        $produits->detail_produit = $request->detail_produit;
        $produits->categorie_id = $request->categorie_id;
        $produits->marque_id = $request->marque_id;

        if ($request->hasFile('photos')) {
            $imag = $request->photos;
            //dd($imag);
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ProduitsImage"), $imageName);
            $produits->photos = $imageName;
        }
        $produits->save();
        return redirect()->back()->with('success', 'Félicitations! Vous avez ajouté le produit avec succès. ');
    }

    public function update_product(Request $request, Produit $produit){
         //dd($request->all());
         $request->validate([
            "prix" => "required",
            "nom_produit" => "required",
            "resume_produit" => "required",
            "detail_produit" => "required",
            "categorie_id" => "",
            "marque_id" => "required",
            'photos' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $produit->prix = $request->prix;
        $produit->nom_produit = $request->nom_produit;
        $produit->resume_produit = $request->resume_produit;
        $produit->detail_produit = $request->detail_produit;
        $produit->categorie_id = $request->categorie_id;
        $produit->marque_id = $request->marque_id;
        if ($request->hasFile('photos')) {
            $imag = $request->photos;
            //dd($imag);
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("ProduitsImage"), $imageName);
            $produit->photos = $imageName;
        }
        $produit->save();
        return redirect()->back()->with('success', 'Félicitations! Vous avez mis à jour le produit avec succès. ');

    }
    public function delete_produit(Produit $produit){
        $produit->delete();
        return back()->with("success", "Le produit a été bien supprimé avec succès !");
    }

    //gestion users
    public function addusers(){
        $utilisateurs = User::all();
        return view('admin.users.add_users', compact('utilisateurs'));
    }
    public function save_user(Request $request) {
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
            $utilisateur = new User();
            $utilisateur->name = $request->name;
            $utilisateur->email = $request->email;
            $utilisateur->password = Hash::make($request->password);
            if ($request->hasFile('photo')) {
                $imag = $request->photo;
                $imageName = time() . '.' . $imag->Extension();
                $imag->move(public_path("UsersImage"), $imageName);
                $utilisateur->photo = $imageName;
            }
            $utilisateur->save();
            return redirect()->back()->with('success', 'Félicitations! Utilisateur crée avec succès !. ');
    }

    public function update_user(Request $request, User $utilisateur){
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required'
        ]);

        $utilisateur->name = $request->name;
        $utilisateur->email = $request->email;

        if ($request->hasFile('photo')) {
            $imag = $request->photo;
            $imageName = time() . '.' . $imag->Extension();
            $imag->move(public_path("UsersImage"), $imageName);
            $utilisateur->photo = $imageName;
        }
        $utilisateur->save();
        return redirect()->back()->with('success', 'Félicitations! Vous mis à jour vos informations avec succès!. ');
    }

    public function delete_user(User $utilisateur){
        $utilisateur->delete();
        return back()->with("success", "L'utilisateur a été bien supprimé avec succès !");

    }


}
