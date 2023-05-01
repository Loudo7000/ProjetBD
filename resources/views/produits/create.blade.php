@extends('layouts.app')
 
@section('titre', 'Produits')
 
@section('contenu')

<div class="container-fluid">

    <h1>Ajout de produit</h1>

    <div class="row">
        <form method="post" action="{{ route('produits.store') }}" enctype="multipart/form-data">

        @csrf
        @if(isset($errors) && $errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="form-group">
                <label for="titre">Nom du produit</label>
                <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
        </div>
        <div class="form-group">
                <label for="genre">Caractéristique</label>
                <input type="text" class="form-control" name="genre" value="{{ old('caracteristique') }}">
        </div>
        <div class="form-group">
                <label for="image">Sélectionner l'image du produit</label>
                <input type="file" class="form-control" name="photo">
        </div>
        <div class="form-group">
                <label for="annee_sortie">Prix</label>
                <input type="text" class="form-control" name="prix" value="{{ old('prix') }}">
        </div>
        <div class="form-group">
                <label for="scenario">Scénario</label>
                <input type="text" class="form-control" name="scenario" value="{{ old('scenario') }}">
        </div>
            <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        </form>
    </div>
</div>


@endsection