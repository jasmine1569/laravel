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
	      <a class="tab__link" href="{!! url('/csun-info'); !!}">Home</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link tab__link--active" href="{!! url('/csun-products'); !!}">Products</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-12">
			<h4><i class="fa fa-folder-open-o margin-icon" aria-hidden="true"></i>Activities, Projects, and Products</h4>
			<hr>
		</div>
	</div>
</div>
</div>
@endsection