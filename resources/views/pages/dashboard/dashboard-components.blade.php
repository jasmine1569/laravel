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
	      <a class="tab__link" href="{!! url('/dashboard-profile'); !!}">Profile</a>
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
        <a class="tab__link tab__link--active" href="{!! url('/dashboard-extras'); !!}">Extras</a>
      </li>
	  </ul>
	</div>
</div>

<div class="section">
  <div class="container">
    <div class="col-md-3">
      <h4 class="type--red">New / Old Components</h4>
      <hr>
      <p>Tab Component</p>
      <p>Panel Component</p>
      <p>Login Component</p>

    </div>

    <div class="col-md-9">
      <h4><i class="fa fa-book margin-icon" aria-hidden="true"></i></i>Panel</h4>
      <hr>

      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel__header">
              <strong>Panel</strong>
            </div>
            <div class="panel__content">This is a basic panel w/ a header
            <label for="ex0">Comment</label>
            <textarea id="ex0" name="ex0" placeholder="Comment..."></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4 class="type--header type--thin"><i class="fa fa-sign-in margin-icon" aria-hidden="true"></i>Login</h4>
          <div class="form__group">
            <div class="row">
              <div class="col-md-6">
                <label for="ex1">Firstname</label>
                <input type="text" id="ex1" name="ex1" placeholder="Text...">
              </div>

              <div class="col-md-6">
                <label for="ex1">Lastname</label>
                <input type="text" id="ex1" name="ex1" placeholder="Text...">
              </div>
            </div>

          </div>

          <div class="form__group">
            <div class="row">
              <div class="col-md-12">
                <label for="ex1">Username</label>
                <input type="text" id="ex1" name="ex1" placeholder="Text...">
              </div>
            </div>
          </div>
        </div>
      </div>
{{-- 
      <div class="row">
        <h4><i class="fa fa-book margin-icon" aria-hidden="true"></i></i>Panel Color</h4>
        <hr>
        <div class="col-md-4">
          <div class="panel__line">
            <div class="panel__content">
              <p class="milli">Lorem ipsum dolor</p>
              <p><strong>Project Pizza</strong></p>
              <br>
              <p class="milli"><i class="fa fa-heart-o margin-icon" aria-hidden="true"></i>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="panel__line">
            <div class="panel__content">
              <p class="milli">Lorem ipsum dolor</p>

              <div class="col-md-6">
                <h4 class="type--marginless"><strong class="margin-icon">64%</strong><a href="#" class="tag tag--success">Approved</a></h4>
                
                <p class="">My pizza place</p>
              </div>

              
              <div class="col-md-6">
                <h4 class="type--marginless"><strong class="margin-icon">64%</strong><a href="#" class="tag tag--success">Approved</a></h4>
                
                <p class="">My pizza place</p>
              </div>
              
              <hr>
              <p class="milli"><i class="fa fa-heart-o margin-icon" aria-hidden="true"></i>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>

      </div> --}}

      <div class="row">
        <div class="col-md-12">
          <h4 class="type--header type--thin"><i class="fa fa-tags margin-icon" aria-hidden="true"></i>Tab</h4>
          <div class="tab tab--active">
            <p class="type--center type--white type--bold">Tab 1</p>
          </div>
          <div class="tab">
            <p class="type--center type--red type--bold">Tab 2</p>
          </div>
          <div class="line clear--left"></div>
          <div class="tab__content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia necessitatibus quia quibusdam eius harum delectus voluptatibus totam quo odio temporibus sapiente placeat optio, aut voluptatem vero aperiam? Quos, illo pariatur.</p></div>
        </div>
      </div>



    </div>
  </div>
</div>

{{--End of Wrapper--}}
</div>

@endsection