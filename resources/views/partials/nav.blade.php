<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <a class="navbal-brand" href="{{route('home')}}">
        {{config('app.name')}}
    </a>
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
      
        @auth
        @if(auth()->user()->roles_id=='1 Admin')
        <li class="nav-item {{setActive('usuarios.*')}}"><a class="nav-link" href="{{ route('usuarios.index')}}">Usuarios</a></li>
        @endif
      
        @endauth
        <li class="nav-item {{setActive('Lista')}}" ><a class="nav-link" href="/Lista">Lista</a></li>
        
    
        <li class="nav-item {{setActive('home')}}" ><a class="nav-link" href="/">Inicio</a></li>
        @guest
        <li class="nav-item"><a  class="nav-link" href="{{route('login')}}">Login</a></li>
        @else
        <li class="nav-item"><a class="nav-link" href="#"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
        @endguest
        
       
    </ul>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
    @csrf
</form>