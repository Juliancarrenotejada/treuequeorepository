<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Admin  - Dashboard</title>



	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-87sz15XXg/vK1YUT8aQFH3EIw5aC/jbpolvTC264SVJfjOIBWv0V/o2FyyKclY8G" crossorigin="anonymous">
	   

   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   

   <link rel="stylesheet" href="{{ asset('admin/css/main.css')}}"> 
</head>
<body>

@include('admin.partials.nav')
	@if(\Session::has('message'))
		@include('admin.partials.message')
	@endif
	

@yield('content')

@include('admin.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="{{ asset('js/pinterest_grid.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>




