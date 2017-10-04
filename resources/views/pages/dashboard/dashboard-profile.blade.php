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
          <p><span class="tag tag--default-outline"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alumni</span>&nbsp;&nbsp;<strong class="header--sm type--red">Master</strong> | <a class="type--white"> Arts Media and Communication</a></p>
          <h1 class="type--thin">Alfred Duke</h1>
          <p><em>Creator - META+Lab</em></p>
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
	      <a class="tab__link tab__link--active" href="{!! url('/dashboard-profile'); !!}">Profile</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/dashboard-class'); !!}">Classes</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/dashboard-projects'); !!}">Projects</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/dashboard-awards'); !!}">Achivements</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/dashboard-extras'); !!}">Extras</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-3">
			<h4>Contact</h4>
			<hr>
			<p><i class="fa fa-phone type--red margin-icon" aria-hidden="true"></i>202-555-0147</p>
			<p><i class="fa fa-envelope-o type--red margin-icon" aria-hidden="true"></i>alfred.duke&#64;gmail.com</p>
			<p><a href="#"><i class="fa fa-globe type--red margin-icon" aria-hidden="true"></i>www.alfredduke.me</a></p>

			<h4>Groups</h4>
			<hr>
			<a href="#" class="tag tag--warning">Anime Club</a>
			<a href="#" class="tag tag--warning">Men Basketball</a>

		</div>

		<div class="col-md-9">
			<h4><i class="fa fa-user-o margin-icon" aria-hidden="true"></i>About Me</h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit corporis asperiores nemo, nulla nobis libero voluptatibus laborum eum hic. Libero iste fuga error suscipit voluptates, aperiam. Qui aliquam natus, inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis voluptate non, obcaecati debitis magnam nemo, numquam maiores quo consequatur tempora minima beatae quae animi id libero sint voluptatum sapiente qui!</p>

			<h4><i class="fa fa-heart-o margin-icon" aria-hidden="true"></i>Interests</h4>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<div class="panel">
					  <div class="panel__content">
					    <p><strong>Project Pizza</strong></p>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel">
					  <div class="panel__content">
					    <p><strong>Project Pizza</strong></p>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel">
					  <div class="panel__content">
					    <p><strong>Project Pizza</strong></p>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel">
					  <div class="panel__content">
					    <p><strong>Project Pizza</strong></p>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel">
					  <div class="panel__content">
					    <p><strong>Project Pizza</strong></p>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="panel">
					  <div class="panel__content">
					    <p><strong>Project Pizza</strong></p>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
					  </div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

{{--End of Wrapper--}}
</div>

@endsection