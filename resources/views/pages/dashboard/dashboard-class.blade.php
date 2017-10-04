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
	      <a class="tab__link tab__link--active" href="{!! url('/dashboard-class'); !!}">Classes</a>
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
			<h4 class="type--red">Enrolled</h4>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<form action="">
						<div class="form__group">
							<label for="example1">Filter</label>
							<select name="example1" id="example1">
							  <option value="">-- Semester --</option>
							  <option value="1">Fall Semester 2017</option>
							  <option value="2">Spring Semester 2017</option>
							  <option value="3">Winter Semester 2016</option>
							</select>
						</div>
					</form>
				</div>
			</div>
			<ul class="list list--hover">
			  <li class="list__item"><a href="#">ART 243 - Introduction to Typography</a></li>
			  <li class="list__item"><a href="#">ART 444 - Graphic Design III</a></li>
			  <li class="list__item"><a href="#">ART 267 - Introduction to Ceramics</a></li>
			  <li class="list__item"><a href="#">ART 367 - Ceramics III</a></li>
			  <li class="list__item"><a href="#">ART 467 - Ceramics IV</a></li>
			  <li class="list__item"><a href="#">ART 560 - Studio Problems in Ceramics Design</a></li>
			</ul>
		</div>

		<div class="col-md-9">
			<h4><i class="fa fa-book margin-icon" aria-hidden="true"></i></i>Class Schedule</h4>
			<hr>
			<div class="table--responsive">
			  <table class="table table--striped table--bordered table--padded table--hover">
				  <thead>
				    <tr>
				      <th>Class #</th>
				      <th>Catalog #</th>
				      <th>Title</th>
				      <th>Days</th>
				      <th>Time</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>163846</td>
				      <td>ART 243</td>
				      <td>Introduction to Typography</td>
				      <td>TuTh</td>
				      <td>8:00 AM - 10:45 AM</td>
				    </tr>
				    <tr>
				      <td>173939</td>
				      <td>ART 444</td>
				      <td>Graphic Design III</td>
				      <td>MoWed</td>
				      <td>2:00 PM - 4:45 PM</td>
				    </tr>
				    <tr>
				      <td>124362</td>
				      <td>ART 267</td>
				      <td>Introduction to Ceramics</td>
				      <td>TuTh</td>
				      <td>11:00 AM - 1:45 PM</td>
				    </tr>
				    <tr>
				      <td>135850</td>
				      <td>ART 367</td>
				      <td>Ceramics III</td>
				      <td>MoWed</td>
				      <td>11:00 AM - 1:45 PM</td>
				    </tr>
				    <tr>
				      <td>138403</td>
				      <td>ART 467</td>
				      <td>Ceramics IV</td>
				      <td>TuTh</td>
				      <td>4:00 PM - 6:45 PM</td>
				    </tr>
				    <tr>
				      <td>184038</td>
				      <td>ART 560</td>
				      <td>Studio Problems in Ceramics Design</td>
				      <td>MoWed</td>
				      <td>8:00 AM - 10:45 AM</td>
				    </tr>
				  </tbody>
			  </table>
			</div>
		</div>
	</div>
</div>

{{--End of Wrapper--}}
</div>
@endsection
