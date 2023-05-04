@extends('layouts.app')
 
@section('titre', 'Produits')
 
@section('contenu')

<div class="container-fluid">

    <h1>Ajout de produit</h1>

    <div class="row">
        <form method="post" action="{{ route('produits.update', [$produit->id]) }}" enctype="multipart/form-data">

        @csrf
        @if(isset($errors) && $errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @method('PATCH')
        <div class="form-group">
                <label>Nom du produit</label>
                <input type="text" class="form-control" name="nom" value="{{ old('nom', $produit->nom) }}">
        </div>
        <div class="form-group">
                <label>Caractéristique</label>
                <input type="text" class="form-control" name="caracteristique" value="{{ old('caracteristique', $produit->caracteristique) }}">
        </div>
        <div class="form-group">
                <label>Sélectionner l'image du produit</label>
                <input type="file" class="form-control" name="photo" value="{{ old('photo', $produit->photo) }}">
        </div>
        <div class="form-group">
                <label>Prix</label>
                <input type="text" class="form-control" name="prix" value="{{ old('prix', $produit->prix) }}">
        </div>
        <div>
            <label>Fournisseur</label>
            <select class="form-control" name="fournisseur_id">
            @foreach($fournisseurs as $fournisseur)
                <option value="{{ $fournisseur->id }}" {{ $fournisseur->id == old('fournisseur_id' ? 'selected' : null )}}>{{ $fournisseur->nom }}</option>
            @endforeach
        </select>
        </div>
            <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        </form>
    </div>
</div>


@endsection