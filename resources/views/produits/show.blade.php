@extends('layouts.app')
 
@section('titre', 'Show Produits')
 
@section('contenu')
    
    <div class="container-fluid">
        <div class="row">
        <h1 class=" text-center  text-danger">{{$produit->nom}}</h1>
            <div class="col-xl-4">
                <img src="{{asset( 'img/produits/' . $produit->photo )}}" class="img-fluid">
            </div>
            <div class="col-xl-4">
                <h5>caracteristique : {{ $produit->caracteristique}}</h5>
                <h5>Nom fournisseur : {{ $produit->fournisseur->nom }}</h5>
                <h5>Adresse fournisseur : {{ $produit->fournisseur->adresse }}</h5>
                <h2>Prix : <span class="text-success">{{ $produit->prix}}$</span></h2>
                
                <a class="btn btn-primary" href="{{ route('produits.storeCommandeProduit', [ $produit->id]) }}">Acheter</a>
                @if(Session::get('user')->droit == 'admin')
                <a href="{{ route('produits.edit', [$produit->id]) }}" class="btn btn-primary">Modifier</a>
                @endif
                
                
            </div>
        </div>
    </div>
       
@endsection
    