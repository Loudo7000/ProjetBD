@extends('layouts.app')
 
@section('titre', 'Produits')
 
@section('contenu')
    
  <div class="location" id="home">
    <h1 id="home" class="mb-5">Nouveau Produit</h1>
    <div class="box">  
      @if (count($produits))
        @foreach($produits as $produit)
              <a href="{{ route('produits.show', [$produit]) }}"><img src="{{asset( 'img/produits/' . $produit->photo )}}" alt=""></a>
        @endforeach @else
        <p>Aucun Produit</p>
      @endif    
    </div>
  </div>

@endsection
    