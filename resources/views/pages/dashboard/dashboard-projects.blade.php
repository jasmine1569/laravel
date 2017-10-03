@extends('layouts.master')

@section('title')
	Fall Immersive Project
@endsection

@section('structure')

<div class="wrapper">
 <div class="section box__cover--half">
  <div class="container pre-overlay">
    <div class="row">
      <div class="col-md-3 type--center">
        <img class="img--circle img-border--thick" src="../public/img/boy-crop.jpg" alt="Nerces Kevork Kazandjian"></div>
      <div class="col-md-9 type--white">
        <div class="flex__cover--half">
          <p><span class="tag tag--default-outline"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alumni</span>&nbsp;&nbsp;<strong class="header--sm type--red">Student</strong> | <a class="type--white"> Arts Media and Communication</a></p>
          <h1 class="type--thin">Alfred Duke</h1>
          <p><em>Mentor - META+Lab</em></p>
          <ul class="list--inline type--marginless h5">
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          </ul>
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
	      <a class="tab__link" href="{!! url('/dashboard-home'); !!}">Home</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/dashboard-profile'); !!}">Profile</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/dashboard-class'); !!}">Classes</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link tab__link--active" href="{!! url('/dashboard-projects'); !!}">Projects</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-3">
			<h4 class="type--red">Contact</h4>
			<hr>
			<p><i class="fa fa-phone type--red margin-icon" aria-hidden="true"></i>202-555-0147</p>
			<p><i class="fa fa-envelope-o type--red margin-icon" aria-hidden="true"></i>alfred.duke&#64;gmail.com</p>
		</div>

		<div class="col-md-9">
			<div class="table--responsive">
			  <table class="table table--striped table--bordered table--padded table--hover">
				  <thead>
				    <tr>
				      <th>Deal One</th>
				      <th>Deal Two</th>
				      <th>Deal Three</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Col 1</td>
				      <td>Col 2</td>
				      <td>Col 3</td>
				    </tr>
				    <tr>
				      <td>Col 1</td>
				      <td>Col 2</td>
				      <td>Col 3</td>
				    </tr>
				    <tr>
				      <td>Col 1</td>
				      <td>Col 2</td>
				      <td>Col 3</td>
				    </tr>
				  </tbody>
			  </table>
			</div>
		</div>
	</div>
</div>

</div>

@endsection