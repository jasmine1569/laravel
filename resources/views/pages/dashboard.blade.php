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
        <p><img class="img--circle img-border--thick" src="https://cdn.metalab.csun.edu/media/faculty/nerces.kazandjian/avatar.jpg" alt="Nerces Kevork Kazandjian"></p>      </div>
      <div class="col-md-9 type--white">
      <br>
        <div class="flex__cover--half">
          <p><span class="tag tag--default-outline"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alumni</span>&nbsp;&nbsp;<strong class="header--sm type--red">Lecturer</strong> | <a class="type--white"> Computer Science</a></p>
          <h1 class="type--thin">Nerces Kevork Kazandjian</h1>
          <p><em>Product Owner - META+Lab</em></p>
          <ul class="list--inline type--marginless h5">
            <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
            <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
            <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
            <li><i class="fa fa-github" aria-hidden="true"></i></li>
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
	      <a class="tab__link" href="#">Home</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="#">Profile</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link tab__link--active" href="#">Classes</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="#">Projects</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="#">Publications</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="#">Committees</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-3">
			<h5 class="">CONTACTS</5>
			<p>888-888-888</p>
			<p>jasmine.beeman&#64;gmail.com</p>
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

			<div class="panel">
			  <div class="panel__header">
			    <strong>Panel</strong>
			  </div>
			  <div class="panel__content">This is a basic panel w/ a header
			  <label for="ex0">Comment</label>
			  <textarea id="ex0" name="ex0" placeholder="Comment..."></textarea>
			  </div>
			</div>

			<h1 class="type--header type--thin type--red">Login</h1>
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

			<h1 class="type--header type--thin type--red">Tab</h1>
			<div class="tab tab--active">
				<p class="type--center type--white type--bold">Tab 1</p>
			</div>
			<div class="tab">
				<p class="type--center type--red type--bold">Tab 2</p>
			</div>
			<div class="line clear--left"></div>
		</div>
	</div>
</div>

</div>
@endsection
