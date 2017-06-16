

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
	{{-- <link rel="stylesheet" type="text/css" href="css/metaphor.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/metaphor.css')}}">
	{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
	
	<title>@yield('title', 'Laravel Project')</title>

	<style>
	  .black-overlay {
	    position: absolute;
	    top: 0;
	    right: 0;
	    left: 0;
	    bottom: 0;
	    width: 100%;
	    height: 100%;
	    background-color: rgba(0, 0, 0, 0.7);
	    display: block;
	    /*z-index: 0;*/
	  }
	</style>	
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

	 <div class="section" style="position: relative; background: url(https://source.unsplash.com/collection/190727/1600x900) no-repeat center center scroll; background-size: cover;">
	  <div class="container" style="position: relative; z-index: 1;">
	    <div class="row">
	      <div class="col-md-12 type--white">
	      	<br>
	        <div style="display: flex; flex-direction: column; justify-content: center; min-height: 500px;">
	        	<img class="img--fluid"  style="width: 10%; margin: auto; margin-bottom: 30px; margin-top: 0px; display: block;" src="../public/img/white_1.svg" alt="">
	          <h1 class="type--thin type--center">Summer Immersive</h1>
	          <p class="type--center"><em>Take your skills to the next level</em></p>
	         </div>
	      </div>
	    </div>
	  </div>
	  <div class="black-overlay"></div>
	</div>

</body>
</html>
