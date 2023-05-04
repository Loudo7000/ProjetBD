@extends('layouts.app')
 
@section('titre', 'Fournisseurs')
 
@section('contenu')

<div class="container-fluid">

    <h1>Ajout de fournisseurs</h1>

    <div class="row">
        <form method="post" action="{{ route('fournisseurs.store') }}" enctype="multipart/form-data">

        @csrf
        @if(isset($errors) && $errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="form-group">
                <label>Nom du fournisseur</label>
                <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
        </div>
        <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="adresse" value="{{ old('adresse') }}">
        </div>
            <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        </form>
    </div>
</div>


@endsection