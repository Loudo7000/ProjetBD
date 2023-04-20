@extends('layouts.app')
 
@section('titre', 'Produits')
 
@section('contenu')


    <!-- MAIN CONTAINER -->
    
      <div class="location" id="home">
        <h1 id="home">Produits Populaires</h1>
        <div class="box">  
          <!-- @if (count($films))
              @foreach($films as $film)
              <a href="{{ route('films.show', [$film]) }}"><img src="{{asset( 'img/films/' . $film->url )}}" alt=""></a>
              @endforeach @else
            <p>Pas de Film</p>
          @endif     -->
        </div>
      </div>

       
     
<!--  
     END OF MAIN CONTAINER -->
@endsection
    