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
	      <a class="tab__link tab__link--active" href="{!! url('/dashboard-home'); !!}">Home</a>
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
        <a class="tab__link" href="{!! url('/dashboard-extras'); !!}">Extras</a>
      </li>
	  </ul>
	</div>
</div>

<div class="section">
	<div class="container">
    <div class="col-md-3">
      <div class="row">
        <div class="col-md-12">
          <h4>Announcements</h4>
          <hr>
          <dl class="accordion">
            <dt class="accordion__header">Opportunities</dt>
            <dd class="accordion__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
            </dd>
            <dt class="accordion__header">Academic Policy Updates</dt>
            <dd class="accordion__content">
              <p>Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
            </dd>
            <dt class="accordion__header">Network Maintenance</dt>
            <dd class="accordion__content">
              <p>Lorsdsdsdem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ab eveniet cumque. Laborum, eveniet autem quae hic vitae corporis voluptates odio at culpa repellendus minus! Vitae architecto optio quae. Ad?</p>
            </dd>
          </dl>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4>Links</h4>
          <hr>
          <p><a href="#">Career Center</a></p>
          <p><a href="#">IT Tech Center</a></p>
          <p><a href="#">CSUN Gmail</a></p>
        </div>
      </div>
      
      
    
    </div>
    <div class="col-md-9">
      <h4><i class="fa fa-newspaper-o margin-icon" aria-hidden="true"></i>Latest News</h4>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__img img--dog"></div>
            <div class="panel__content">
              <p><strong>About Dogs</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__img img--coffee"></div>
            <div class="panel__content">
              <p><strong>About Coffee</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__img img--hands"></div>
            <div class="panel__content">
              <p><strong>About Nuts</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <ul class="pagination">
            <li class="disabled"><span>«</span></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="disabled"><span>...</span></li>
            <li><a href="">20</a></li>
            <li><a href="#">21</a></li>
            <li><a href="#" rel="next">»</a></li>
          </ul>
        </div>
      </div>

      
    </div>
	</div>
</div>

{{--End of Wrapper--}}
</div>

@endsection