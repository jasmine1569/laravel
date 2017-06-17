<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{-- <title>Laravel Project</title> --}}
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="icon" href="http://www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{url('css/metaphor.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	<title>@yield('title', 'Laravel Project')</title>	
</head>
<body>
	<div class="header">
		<nav class="primary-nav">
		  <div class="container">
		    <div class="primary-nav__mobile">
		      <div class="primary-nav__btn">
		        <div class="bar"></div>
		        <div class="bar"></div>
		        <div class="bar"></div>
		      </div>
		      <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
		    </div>
		    <ul class="primary-nav__links">
		      <li><a class="primary-nav__link active" href="{!! url('/home'); !!}">Login</a></li>
		      <li><a class="primary-nav__link" href="#">Help</a></li>
		    </ul>
		  </div>
		</nav>
	</div>

	 <div class="section box__cover">
	  <div class="container pre-overlay">
	    <div class="row">
	      <div class="col-md-12 type--white">
	      	<br>
	        <div class="flex__cover">
	        	<img class="img--fluid meta-logo"  src="../public/img/white_1.svg" alt="">
		          <h1 class="type--thin type--center">Summer Immersive</h1>
		          <p class="type--center"><em>Take your skills to the next level</em></p>
	         </div>
	         {{-- <button role="button" class="btn btn-primary"><a href="{!! url('/dashboard'); !!}">LOGIN</a></button> --}}
	      </div>
	    </div>
	  </div>
	  <div class="black-overlay"></div>
	</div>

</body>
</html>
