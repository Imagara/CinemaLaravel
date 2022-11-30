<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
<div class="container">
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="/films" class="nav-link px-2 text-white">Фильмы</a></li>
          <li><a href="/about" class="nav-link px-2 text-white">About</a></li>
        </ul>
        
        <div class="text-end">
          @if(Auth::check())
          <a href="/profile" class="nav-link px-2 text-white">Профиль</a>
          <a href="/logout" class="nav-link px-2 text-white">Выход</a>
          @else
          <a href="/login" class="nav-link px-2 text-white">Вход</a>
          <a href="/registration" class="nav-link px-2 text-white">Регистрация</a>
          @endif
        </div>
      </div>
    </div>
  </header>
  </div>

@yield('main_content')
</body>
</html>