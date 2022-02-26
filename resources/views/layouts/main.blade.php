<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/style.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/img/logo-events-new.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex flex-column">
                <div class="container" id="navbar">
                    <a class="navbar-brand" href="/">
                        <img src="/img/logo-events-new.png" width="80px" alt="logo">
                    </a>
                    <div class="justify-content-end">
                        <ul class="navbar-nav nav-pills"> 
                            <li class="nav-item">
                                <a href="/" class="nav-link">EVENTOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">CRIAR EVENTOS</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">MEUS EVENTOS</a>
                                </li>
                                <li class="nav-item">
                                    <form action="/logout" method="POST">
                                    {{ csrf_field() }}
                                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">SAIR</a>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a href="/login" class="nav-link">ENTRAR</a>
                                </li>  
                                <li class="nav-item">
                                    <a href="/register" class="nav-link">CADASTRAR</a>
                                </li>
                            @endguest
                        </ul>
    
                    </div>
                </div>
                    
            </nav>
        </header>
        <main class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg alert alert-success w-100 m-auto text-center"> {{session('msg')}} </p>
                @endif
            </div>
        </main>
        <div class="mb-5">
            @yield('content')
        </div>
    <footer class="container-fluid">Events World &copy; 2022</footer>
    <script src="/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>