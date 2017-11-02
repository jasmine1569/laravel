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
        	<h1 class="type--center">Welcome to the CSUN Sandbox Environment.</h1>
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
	      <a class="tab__link" href="{!! url('/csun-products'); !!}">Products</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-12">
			<h4><i class="fa fa-folder-open-o margin-icon" aria-hidden="true"></i>Biography</h4>
			<hr>
			<p>The CSUN Sandox Environment provides students, faculty, and units with a flexible environment to deliver, to deploy, to develop, to pilot, to prototype, or to just play with new technology. This technlogy could be used to support your class curriculum, to support your research, to engage students in exploratory activities, or other activities in which are you interested.</p>
			<p>This environment is maintained and supported by the our students in the CIT (Computer Information Technology) and Computer Science programs, under the supervision and mentorship of the META+LAB and the Advanced Technology Lab. Although this is not a production environment and we can NOT provide a guarenteed level of service, we provide best effort support with the goal of providing exceptional support.</p>
			<p>To get a better understanding of the possibilities and to learn how others are using the sandbox environment, feel free to peruse the list of projects and activities being supported. For more information, please send us an email at <a href="mailto:info@sandbox.csun.edu">info@sandbox.csun.edu</a>.</p>
		</div>
	</div>
</div>
</div>
@endsection