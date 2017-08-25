@extends('layouts.master')

@section('title')
	Laravel Project
@endsection

@section('structure')

<div class="wrapper">
 <div class="section" style="position: relative; background: url(http://www.csun.edu/faculty/imgs/9.jpg) no-repeat center center scroll; background-size: cover;">
  <div class="container" style="position: relative; z-index: 1;">
    <div class="row">
      <div class="col-md-3 type--center">
        <p><img class="img--circle" style="border: 5px solid #fff; text-align: center; max-width: 100%; height: auto;" src="https://cdn.metalab.csun.edu/media/faculty/nerces.kazandjian/avatar.jpg" alt="Nerces Kevork Kazandjian"></p>      </div>
      <div class="col-md-9 type--white">
      <br>
        <div style="display: flex; flex-direction: column; justify-content: center; min-height: 215px;">
          <p><span class="tag tag--default-outline"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alumni</span>&nbsp;&nbsp;<strong class="header--sm type--red">Lecturer</strong> | <a style="color: #fff;" href="#"> Computer Science</a></p>
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
			<div class="row">
				<div class="col-sm-4">
					<h5 class="">CONTACTS</5>
					<p>888-888-888</p>
					<p>jasmine.beeman@ gmail.com</p>
				</div>
				<div class="col-sm-8">
					
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







				</div>
			</div>
		</div>
	</div>
</div>
@endsection
