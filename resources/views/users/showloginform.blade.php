<!DOCTYPE html>
<html lang="fr-ca">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('titre') </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css\login.css')}}">
  <script src="main.js"></script>
</head>
<body>

<form method="POST" action="{{ route('users.login') }}">
    @csrf
    <div class="login">
        <h1 class="login__title">Connexion</h1>
        <div class="login__group">
            <input class="login__group__input" placeholder="Pseudo" type="text" name="email" required="true"/>
        </div>
        <div class="login__group">
            <input class="login__group__input" placeholder="Mot de passe" type="password" name="password" required="true"/>
        </div>
    @if(isset($errors) && $errors->any())
        @foreach($errors->all() as $error)
          <p class="text-white">{{ $error }}</p>
        @endforeach
    @endif
        <button class="login__sign-in" type="submit">Se Connecter</button>
        <div class="login__secondary-cta"><a class="login__secondary-cta__text" href="http://127.0.0.1:8000/usagers/creation">Créer un compte</a><a class="login__secondary-cta__text login__secondary-cta__text--need-help" href="#">besoin d'aide?</a></div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>