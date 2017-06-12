<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Icon -->
    <link rel="icon" href="http://oeduardoal.github.io/eduardoalmeida.ico" />

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="painelcontratodigital">
    <div id="app" class="">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="col-sm-2 navbar-brand text-left" href="{{ url('/') }}">
                   <a href="{{ url('/a/painel') }}">
                   <img src="../img/logo.png" alt="Website Fortaleza" class="logo-website">
                   </a>
                </div>
<<<<<<< HEAD
                <div class="col-sm-6 menu-main text-left" href="{{ url('/') }}">
                    <nav>
                        <ul>
                            <li>
                                <a href="/a/painel/">Pendentes</a>
                            </li>
                            <li>
                                <a href="/a/painel/concluidos">Concluidos</a>
                            </li>
                             <li>
                                <a href="/a/painel/cancelados">Cancelados</a>
=======
                <div class="col-sm-7 menu-main text-left" href="{{ url('/') }}">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Contratos</a>
                            </li>
                            <li>
                                <a href="#">Contratos</a>
                            </li>
                             <li>
                                <a href="#">Contratos</a>
>>>>>>> master
                            </li>
                        </ul>
                    </nav>
                </div>
<<<<<<< HEAD
                <div class="col-sm-4 .navbar-brand">
                    <div class="btn-group" role="group" aria-label="...">
                         <a href="/contrato/novo" class="btn btn-verde">
                            NOVO CONTRATO
                        </a>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{Auth::user()->name}}
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                              <li><a href="#">Dropdown link</a></li>
                              <li>
                                <a href="{{ url('/logout') }}" class="text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><b>Logout</b></a>
                              </li>
                            </ul>
                          </div>
=======
                <div class="col-sm-3 .navbar-brand">
                    <div class="btn-group" role="group" aria-label="...">
                         <a href="#" class="btn btn-verde">
                            NOVO CONTRATO
                        </a >

                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         {{Auth::user()->name}}
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        
                          <li><a href="#">Dropdown link</a></li>
                          <li>
                            <a href="{{ url('/logout') }}" class="text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><b>Logout</b></a>
                          </li>
                        </ul>
                      </div>
>>>>>>> master
                    </div>
                </div>        
            </div>
        </nav>

        @yield('content')
        <footer>
            
        </footer>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
