<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel 8.4') }}</title>
<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Styles -->
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
Laravel 8.4 User Roles and Permissions - artificialtopic.com
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto"></ul>
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
@guest
<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
@else
<li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
<li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
<li><a class="nav-link" href="">Manage Blog</a></li>
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
</ul>
</div>
</div>
</nav>
<main class="py-4">
<div class="container">
@yield('content')
</div>
</main>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>