@if(Auth::check())
	<li class="dropdown">
		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i>   {{ Auth::user()->name }}<span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
		</ul>
	</li>
@else

		<li  class="dropdown">
          <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
         <li><a href="{{ route('login-get') }}">iniciar sesion</a></li>  
         </li>  
			<li><a href="{{ route('register-get') }}">Registrarse</a></li>
		</ul>
	</li>
@endif



