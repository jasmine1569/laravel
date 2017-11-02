@extends('layouts.master')

@section('title')
	CSUN Sandbox
@endsection

@section('structure')

<div class="wrapper">
 <div class="section box__cover--half">
  <div class="container pre-overlay">
    <div class="row">
      <div class="col-md-12 type--white">
        <div class="flex__cover--half">
        	<h1 class="type--center">Welcome to the META+LAB Sandbox Environment.</h1>
         </div>
      </div>
    </div>
  </div>
  <div class="black-overlay"></div>
</div>

<div class="tab-container">
	<div class="container">
	  <ul class="tabs cf">
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-info'); !!}">Home</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-products'); !!}">Products</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-web'); !!}">Web Services</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link tab__link--active" href="{!! url('/meta-projects'); !!}">Projects</a>
	    </li>
	  </ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="col-md-12">
		<h4><i class="fa fa-folder-open-o margin-icon" aria-hidden="true"></i>Projects</h4>
		<hr>
		<div class="row">
			<div class="col-md-4">
				<div class="panel main--panel">
				  <div class="panel__content">
				    <p><strong>Metaphor</strong></p>
				    <p>Metaphor is a user interface kit that ensures web applications maintain consistency with CSUN branding and identity standards. Metaphor was built specifically to improve the mobile user experience and assures compliance with ADA guidelines on all platforms. It will also extend the current utility of the Web-One guidelines to incorporate web-applications.</p>
				    <p>Publicly accessible on GitHub: <a href="https://github.com/csun-metalab" target="_blank" class="hyphens">https://github.com/csun-metalab</a></p>
				    <p>Documentation URL:<a href="http://www.csun.edu/metalab/metaphor/docs/accordion.html" target="_blank" class="hyphens"> http://www.csun.edu/metalab/metaphor/docs/accordion.html</a></p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

{{--End of Wrapper--}}

@endsection