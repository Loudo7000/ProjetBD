@extends('layouts.app')
 
@section('titre', 'Modification Usager')
 
@section('contenu')



    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xl-6 offset-xl-3">
                <form class="" method="POST" action="{{ route('users.update', [$usager->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <label class="nf" for="film">Modification : {{ $usager->nom }}</label>
                <div class="form-group">
                    <input class="my-3 form-control" placeholder="Nom" type="text" name="nom" value="{{ old('nom', $usager->nom) }}">
                    <input class="my-3 form-control" placeholder="Prenom" type="text" name="prenom" value="{{ old('prenom', $usager->prenom) }}">
                    <input class="my-3 form-control" placeholder="Adresse" type="text" name="adresse" value="{{ old('adresse', $usager->adresse) }}">    
                    <input class="my-3 form-control" placeholder="Email" type="email" name="email" value="{{ old('email', $usager->email) }}">
                    <input class="my-3 form-control" placeholder="Mot de Passe" type="password" name="password" >
                    <input class="my-3 form-control" placeholder="Confirmation du mot de passe" type="password" name="password_confirmation">         
                </div>

                    <button type="submit" class="btn btn-danger mt-3">Modifier</button>
                </form>
        </div>
        </div>
    </div>

@error('name')
    <span>{{ $message }}</span>
@enderror

@endsection