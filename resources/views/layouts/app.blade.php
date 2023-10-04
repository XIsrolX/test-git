<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="pc.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Links -->
    <link href="{{ asset('css/bootswatch5.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">

    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">

 
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app">


        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('welcome') }}">Inicio</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                @if (Auth::check())

                  <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('formulario.index') }}">Formulario
                          <span class="visually-hidden">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactos.index') }}">Contactos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('calendario.index') }}">Calendario</a>
                      </li>
                    </ul>
                                  
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form></li>                    
                      </ul>
                    </li>
                    @endguest
                </ul>
              </div>
            </div>
          </nav>
        </nav>
        <main class="py-4">
          <div class="container">
            @yield('content')
          </div>
        </main>
    </div>
     <!-- Scripts -->
     <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
       <script src="{{ asset('js/calendario.js') }}" defer></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">></script>
       <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
       <script type="text/javascript">  
             var baseURL= {!! json_encode(url('/')) !!}
       </script>

       <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
       <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

       @yield('datatable')
</body>
<footer class="mt-auto">
  <div>
    @include('footer')
  </div>
</footer>
</html>
