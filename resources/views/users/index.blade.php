@extends('layouts.app')
 
@section('titre', 'Usager Index')
 
@section('contenu')


    <!-- MAIN CONTAINER -->
    
        <h1 class="">Liste des usagers</h1>
        <div class="container-fluid rm">
          <div class="row">
          @if (count($usagers))
              @foreach($usagers as $usager)
              <div class="col-xl-4">
                <div class="our-team">
                  <div class="picture">
                  <a href="{{ route('users.edit', [$usager->id]) }}"><img class="img-fluid" src="{{asset( 'img/usagers/' . $usager->avatar )}}"></a>
                  </div>
                  <div class="team-content">
                    <h4 >{{ $usager->nom}}</h4>
                    <h4>{{ $usager->email}}</h4>
                    @if ($usager->id != Session::get('id'))
                    <form class="m-0 form-0" method="POST" action="{{route('users.destroy', [$usager->id]) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    @endif    
                  </div>
                </div>
              </div>
              @endforeach @else
            <p>Pas d'usager</p>
          @endif    
          </div>
        </div>

       
     
<!--  
     END OF MAIN CONTAINER -->
@endsection
    