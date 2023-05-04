<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Commande;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::orderBy('id', 'DESC')->get();
        return View('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::orderBy('nom')->get();
        return View('produits.create', compact('fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $produit = new Produit($request->all());
            $uploadedFile = $request->file('photo');
                $nomFichierUnique = str_replace(' ', '_', $produit->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();
                    
            try {
                $request->photo->move(public_path('img/produits'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $produit->photo = $nomFichierUnique;
            $produit->save();     
            return redirect()->route('produits.index')->with('message', "Ajout du produit " . $produit->nom . " réussi!");
        }
            
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('produits.index')->withErrors(['L\'ajout n\'a pas fonctionné']); 
        }
        return redirect()->route('produits.index');
    }

    public function storeCommandeProduit($idP)
    {
        
        try{
            $commande = Commande::where('user_id','=', session('id'))->where('etat','=', 'panier')->first();

            if(!(isset($commande)))
            {
                $data = [
                    'recuperation' => '',
                    'etat' => 'panier',
                    'user_id' => session('id'),
                    ];
                    Commande::create($data);
            }
            $commande = Commande::where('user_id','=', session('id'))->where('etat','=', 'panier')->firstOrFail();
            $produit = Produit::findOrFail($idP);
                
            /*Verifier sur la relation existe*/ 
            if($commande->produits->contains($produit)){
                    return redirect()->route('produits.index')->withErrors(['Relation existe!']);
                }
                else{
                    $commande->produits()->attach($produit);
                }
            $commande->save();
            return redirect()->route('produits.index')->with('message',"Relation créé");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('produits.index')->withErrors(['Relation invalide']); 
        }
        return redirect()->route('produits.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return View('produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseurs = Fournisseur::orderBy('nom')->get();
        $produit = Produit::findOrFail($id);
        return View('produits.edit', compact('produit','fournisseurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
