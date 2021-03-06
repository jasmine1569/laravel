<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="icon" href="http://www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{ url('css/metaphor.css') }}">
	<link rel="stylesheet" type="text/js" href="{{ url('js/metaphor.js') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	
	<title>@yield('title', 'Project Title')</title>	
</head>

<body>
	@include('layouts.partials.nav')
	@include('layouts.partials.dashboard-banner')
		<div class="main main--metalab">
			@yield('structure')
		</div>
	@include('layouts.partials.footer')
</body>

<!-- CSUN Branded Fonts -->
<script src="//use.typekit.net/gfb2mjm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>

</html>