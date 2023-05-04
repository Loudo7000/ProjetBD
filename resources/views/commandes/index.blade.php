@extends('layouts.app')
 
@section('titre', 'Panier')
 
@section('contenu')
    
  <div class="location" id="home">
    <h1 id="home" class="mb-5">Panier</h1>
    
    @if (isset($commandePaniers))
    <a class="btn btn-primary" href="{{ route('commandes.update', [$commandePaniers->id ,'magasin']) }}">Ramassage</a>
    <a class="btn btn-primary" href="{{ route('commandes.update', [$commandePaniers->id ,'livraison']) }}">livraison</a>
    <div class="box text-center">  
            @foreach($commandePaniers->produits as $commandeProduit)
                <a href="{{ route('produits.show', [$commandeProduit]) }}"><img src="{{asset( 'img/produits/' . $commandeProduit->photo )}}" alt=""></a>

            @endforeach
              
    </div>
        @else
            <p>Aucun produit dans le paniers</p>
        @endif  
  </div>

  <div class="location" id="home">
    <h1 id="home" class="mb-5">commande envoyé</h1>
    <div class="box text-center">  
      @if (count($commandeEnvoyes))
        @foreach($commandeEnvoyes as $commandeEnvoye)
            @foreach($commandeEnvoye->produits as $commandeProduit)
                <a href="{{ route('produits.show', [$commandeProduit]) }}"><img src="{{asset( 'img/produits/' . $commandeProduit->photo )}}" alt=""></a>

            @endforeach
        @endforeach @else
        <p>Aucune commande envoyé</p>
      @endif    
    </div>
  </div>

@endsection
    
