  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand main-title" href="#">Truequeo.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">my laravel store <span class="sr-only">(current)</span></a>
        </li>
       
      </ul>
       <ul class="nav navbar-nav navbar-right">
             
            <li class="nav-item"><a  class="nav-link" href="#">Categorias</a></li>
           <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
           <li class="nav-item"><a class="nav-link" href="#">Pedidos</a></li>
           <li class="nav-item"><a class="nav-link" href="#">Usuarios</a></li>
         <li class="nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="fa fa-user"></i>   {{ Auth::user()->name }}<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
            </ul>
        </li>       
               
    </ul>  
    </div>
  </nav>