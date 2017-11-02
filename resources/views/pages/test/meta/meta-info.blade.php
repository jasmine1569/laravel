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
	      <a class="tab__link tab__link--active" href="{!! url('/meta-info'); !!}">Home</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-products'); !!}">Products</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-web'); !!}">Web Services</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-projects'); !!}">Projects</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-12">
			<h4><i class="fa fa-folder-open-o margin-icon" aria-hidden="true"></i>Biography</h4>
			<hr>
			<p>The Lab is a student-run, staff-and-faculty supported organization directed to the development of mobile-responsive web applications for the University and for external clients. Under the mentorship of faculty, students who gain admission to the program work on these applications, as well as on creative design solutions and marketing strategies within an interdisciplinary setting. A fundamental purpose of META+LAB is to hone students' professional skills and extend their curriculum through real case projects, collaboration, and team-based interaction in order to prepare them to work in our dynamic and diverse workforce.</p>
			<p>This space showcases the products, web services, and projects that META+LAB is responsible for. Feel free to check out our work and their respective demo environments, as well as the projects we're currently working on.</p>
			<p>For more information on our program, visit the META+LAB mebsite at <a href="https://www.metalab.csun.edu/" target="_blank">www.metalab.csun.edu</a>.</p>
		</div>
	</div>
</div>
</div>
@endsection