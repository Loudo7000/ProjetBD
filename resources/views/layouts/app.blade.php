<!DOCTYPE html>
<html lang="fr-ca">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('titre') </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css\style.css')}}">
  <link rel="icon" type="image/png" href="{{asset('img/RatRouge.png')}}" />
  <script src="main.js"></script>
</head>
<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="http://127.0.0.1:8000/"><img src="{{asset('img/ratflix.png')}}" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="http://127.0.0.1:8000/#home">Populaires</a>
        <a href="http://127.0.0.1:8000/#hero">Héro</a>
        <a href="http://127.0.0.1:8000/#anime">Anime</a>     
      </nav>

      <nav class="sub-nav">

      <a href="http://127.0.0.1:8000/films/index">Film index</a>
      <a href="http://127.0.0.1:8000/acteurs/index">Acteur index</a>
      
      @auth
      <a href="http://127.0.0.1:8000/usagers/index">Usager index</a>
      
        <div class="dropdown">
          <button class="dropbtn">Ajouter</button>
          <div class="dropdown-content">
            <a href="http://127.0.0.1:8000/acteurs/creation">Acteurs</a>
            <a href="http://127.0.0.1:8000/films/creation">Films</a>
            <a href="http://127.0.0.1:8000/usagers/creation">Usager</a>
            <a href="http://127.0.0.1:8000/acteur_film/creation">Acteurs Films</a>
          </div>
        </div>
        <form class="form-0" method="POST" action="{{ route('usagers.logout') }}" >
        @csrf
        <input type="submit" value="Se Déconnecter">
        </form>
        <a href="#" >{{ Session::get('nom') }}</a>
        @else
        <a href="http://127.0.0.1:8000/login">Se Connecter</a>
        @endauth
      </nav>      
    </header>
    
    <!-- END OF HEADER -->
    <section class="main-container">

    @if(isset($errors) && $errors->any())
      <div class="alert alert-danger" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    @if (\Session::has('message'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <p>{!! \Session::get('message') !!}</p>
    </div>
  @endif

    @yield('contenu')

    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
    <footer>
      <p>&copy 1997-2022 Ratflix, Inc.</p>
      <p>RatCorporation 2022</p>
    </footer>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>