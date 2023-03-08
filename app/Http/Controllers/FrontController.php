<?php

namespace App\Http\Controllers;


use App\Models\Devi;
use App\Models\About;
use App\Models\Client;
use App\Models\Marque;
use App\Models\Projet;
use App\Models\Adresse;
use App\Models\Produit;
use App\Models\Service;
use App\Models\Banniere;
use App\Models\Categorie;
use App\Models\Realisation;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index(){
        $services = Service::latest()->limit(6)->get();
        $adresses = Adresse::all();
        $about = About::OrderBy('titre')->first();
        $realisations = Realisation::all();
        $banniere = Banniere::OrderBy('libelle')->first();
        $projet = Projet::OrderBy('titre')->first();
        return view('front.index', compact('services', 'realisations', 'adresses', 'about', 'projet', 'banniere'));
    }
    
    public function service(){
        $services = Service::all();
        $adresses = Adresse::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.service',compact('services', 'adresses', 'banniere'));
    }

    public function detail_service($id){
        $service = Service::find($id);
        $services = Service::all();
        $adresses = Adresse::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.detail_service', compact('service', 'adresses', 'services', 'banniere'));
    }
    public function realisation(){
        $realisations = Realisation::all();
        $services = Service::all();
        $adresses = Adresse::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.realisation', compact('realisations', 'services', 'adresses', 'banniere'));
    }
    public function contact(){
        $services = Service::all();
        $adresses = Adresse::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.contact',  compact('services', 'adresses', 'banniere'));
    }

    public function client(){
        $clients = Client::all();
        $services = Service::all();
        $adresses = Adresse::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.client', compact('clients', 'services', 'adresses', 'banniere'));
    }
    public function about(){
        $clients = Client::all();
        $services = Service::all();
        $adresses = Adresse::all();
        $about = About::OrderBy('titre')->first();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.presentation', compact('clients', 'services', 'adresses', 'about', 'banniere'));
    }
    //section devis
    public function devis(){
        $adresses = Adresse::all();
        $services = Service::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        return view('front.devis', compact('adresses', 'services', 'banniere'));
    }
    public function save_devis(Request $request){
        //dd($request->all());
        $request->validate([
            'adresse_email' => ['required', 'string', 'email', 'max:255'],
            'nom' => "required",
            "service_id" => "required",
            'telephone' =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'ville' => "required",
            'pays' => "required",
            'fichier_devis' =>  'nullable|mimes:jpg,png,jpeg,pdf,csv,xlx,docx',
            'specifite_service' => "nullable",
            'delai_livraison' => "nullable",
            'description_detaillee' => "required",
        ]);
        $devis = new Devi();
        $devis->adresse_email = $request->adresse_email;
        $devis->nom = $request->nom;
        $devis->telephone = $request->telephone;
        $devis->ville = $request->ville;
        $devis->pays = $request->pays;
        $devis->specifite_service = $request->specifite_service;
        $devis->delai_livraison = $request->delai_livraison;
        $devis->description_detaillee = $request->description_detaillee;
        $devis->service_id = $request->service_id;  
        if ($request->hasFile('fichier_devis')) {
            $filename = $request->fichier_devis;
            //dd($filename);
            $imageName = time() . '.' . $filename->Extension();
            $filename->move(public_path("FichierDevis"), $imageName);
            $devis->fichier_devis = $imageName;
        }
        $devis->save();
        return redirect()->back()->with('success', 'Bravo ! Votre demande de devis est soumis avec succès.');
    }

    public function service_specificite(Request $request){
        //return dd($request->all());
        $serviceId = $request->data;
        $service = Service::where('id', $serviceId)->first();
        $html = null;
        if(!is_null($service)){
            $specificites = $service->specificites;
            
            if(!is_null($specificites) && $specificites->count()){
            $html .= '<select class="form-control" name="specifite_service" id="specifite_service">';
                foreach ($specificites as $row) {
                $html .= '<option value="'.$row->id.'">'.Str::ucfirst($row->specifite_service).'</option>';
                }
                $html .= '</select>';
            }else{
            $html = '<div class="alert alert-danger">Aucune spécificité !</div>';
            }
        }else{
            $html = '<div class="alert alert-danger">Veuillez sélectionner un service !</div>';
        }
        return json_encode($html);
    }

    public function products(){
        $adresses = Adresse::all();
        $produits = Produit::all();
        $services = Service::all();
        $categories = Categorie::all();
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        $marques = Marque::all();
        return view('front.nos-produits', compact('adresses', 'services', 'banniere', 'categories', 'marques', 'produits'));
    }

    //detail produit
    public function detail($id){
        $banniere = Banniere::OrderBy('imagebanniere')->first();
        $adresses = Adresse::all();
        $services = Service::all();
        $produit = Produit::find($id);
        return view('front.detail-produit', compact('banniere', 'adresses', 'services','produit'));
    }

}
