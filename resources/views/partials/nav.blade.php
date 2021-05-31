<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">

    


    {{--BOTON QUE UTILIZAREMOS PARA ABRIR LA NAVEGACION EN EL MOVIL--}}
    <button class="navbar-toggler" type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">


            
    <ul class="nav nav-pills">
        {{-- <li class="nav-item "><a class="nav-link {{ setActive('about')}}"  href="{{route('reset')}}">Restablecer Contraseña</a></li> --}}
        <li class="nav-item"><a class="nav-link {{ setActive('register') }}" href="{{route('register')}}">Resgistrar Usuario</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('show-users') }}" href="{{route('users.show')}}">Ver Usuarios</a></li>
        <li class="nav-item "><a class="nav-link {{setActive('reset')}}" href="{{route('reset')}}">Cambiar Contraseña</a></li>
        <li class="nav-item "><a class="nav-link {{setActive('login')}}" href="{{route('login')}}">Iniciar Sesion</a></li>

        
        
       
    </ul>

        </div>
    </nav>
    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> --}}
        @csrf
    </form>