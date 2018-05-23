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
          <li class="nav-item"><a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li> 
          <li class="nav-item"><a class="nav-link" href="#">Conocenos</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>        
       @include('store.partials.menu-user')
         </ul>   
  </ul>  
  </div>
</nav>

