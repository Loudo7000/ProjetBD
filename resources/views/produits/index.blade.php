@extends('layouts.app')
 
@section('titre', 'Produits')
 
@section('contenu')


    <!-- MAIN CONTAINER -->
    
      <div class="location" id="home">
        <h1 id="home">Produits Populaires</h1>
        <div class="box">  
          @if (count($produits))
              @foreach($produits as $produit)
              <h1>{{$produit->nom}}</h1>
              @endforeach @else
            <p>Pas de Film</p>
          @endif    
        </div>
      </div>

       
     
<!--  
     END OF MAIN CONTAINER -->
@endsection
    