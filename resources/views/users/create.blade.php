@extends('layouts.app')
 
@section('titre', 'Création films')
 
@section('contenu')



    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xl-6 offset-xl-3">
            <img class="img-fluid mt-5" src="{{asset('img/createUsager.png')}}">
                <form class="" method="POST" action="{{ route('usagers.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input class="my-3 form-control" placeholder="Nom" type="text" name="nom" value="{{ old('nom') }}"> 
                    <input class="my-3 form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                    <input class="my-3 form-control" placeholder="Photot de Profil" type="file" name="avatar" >
                    <input class="my-3 form-control" placeholder="Mot de Passe" type="password" name="password" >
                    <input class="my-3 form-control" placeholder="Confirmation du mot de passe" type="password" name="password_confirmation">         
                </div>
                    
                    <button type="submit" class="btn btn-danger mt-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

@error('name')
    <span>{{ $message }}</span>
@enderror
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="{{asset('js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\UsagerRequest')!!}
@endsection