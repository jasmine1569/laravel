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
	      <a class="tab__link" href="{!! url('/dashboard-projects'); !!}">Projects</a>
	    </li>
      <li class="tab__list">
        <a class="tab__link tab__link--active" href="{!! url('/dashboard-awards'); !!}">Achivements</a>
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
      <h4 class="type--red">Groups</h4>
      <hr>
      <h6><i class="type--red fa fa-flag margin-icon" aria-hidden="true"></i>Community Engagement Fellow</h6>
      <h6><i class="type--red fa fa-bolt margin-icon" aria-hidden="true"></i>Learning-Centered Beck Grant</h6>
      <h6><i class="type--red fa fa-fire margin-icon" aria-hidden="true"></i>Teaching Toolkit Contributor</h6>
 
    </div>

    <div class="col-md-9">
      <h4><i class="type--red fa fa-star-o margin-icon" aria-hidden="true"></i>Awards</h4>
      <hr>
      <ul class="timeline">
        <li class="timeline__header"><h4><strong>Staff</strong> 2012, California State University, Northridge</h4></li>
        <hr>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>National and State Teacher of the Year</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>International Reading Association Awards</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>Creative 5 A Day Teacher of the Year</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
        <li class="timeline__header"><h4><strong>Staff</strong> 2013, California State University, Northridge</h4></li>
        <hr>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>Outstanding Social Studies Teacher of the Year</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>Internet Innovators Award</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
        <li class="timeline__header"><h4><strong>Staff</strong> 2014, California State University, Northridge</h4></li>
        <hr>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>National Teachers Hall of Fame</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
        <li>
          <p class="timeline__event"><i class="type--gold fa fa-trophy margin-icon" aria-hidden="true"></i><b>National Science Teachers Association Awards</b></p>
          <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
        </li>
      </ul>
    </div>
  </div>
</div>

{{--End of Wrapper--}}
</div>

@endsection