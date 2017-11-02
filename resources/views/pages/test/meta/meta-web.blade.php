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
        	<h1 class="type--center">Welcome to the META+LAB Sandbox Environment.</h1>
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
	      <a class="tab__link" href="{!! url('/meta-info'); !!}">Home</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-products'); !!}">Products</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link tab__link--active" href="{!! url('/meta-web'); !!}">Web Services</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-projects'); !!}">Projects</a>
	    </li>
	  </ul>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="col-md-12">
			<h4><i class="fa fa-folder-open-o margin-icon" aria-hidden="true"></i>Web Services</h4>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
						    <p><strong>Affinity</strong></p>
						    <p>Affinity provides information acknowledging and celebrating teaching interests and accomplishments as well as promoting faculty community and networking. The web service provides a gateway to access information on interests, badges and expertise of a particular professor via REST-ful API. The information is retrieved by creating a specific URI and giving values to filter the data. The information that is returned is a JSON object that contains a set of interest or badges attached to the particular member selected. Production URL: <a href="https://api.metalab.csun.edu/affinity" target="_blank" class="hyphens">https://api.metalab.csun.edu/affinity</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Curriculum</strong></p>
					    <p>The Curriculum web service provides information about courses and classes. This information is derived from the CSUN catalog and SOLAR. Curriculum enables the user to access all public information of a selected course or class via a REST-ful API. The information is retrieved by creating a specific URI and giving values to filter the data. The information that is returned is a JSON object that contains the set of courses or classes. Production URL: <a href="https://api.metalab.csun.edu/curriculum" target="_blank" class="hyphens">https://api.metalab.csun.edu/curriculum</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Degrees</strong></p>
					    <p>The degrees API provides a web service as an interface for requesting information about a professor's degree and institutional background. This information is derived through CSUN's catalog. Degrees enables the user to access information including degree, year and institution. Production URL: <a href="https://api.metalab.csun.edu/degrees" target="_blank" class="hyphens">https://api.metalab.csun.edu/degrees</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Directory</strong></p>
					    <p>ETD is a web application designed to replace the thesis paperwork students must file with Graduate Studies. ETD also eliminates the need for students to print and bind copies of their theses. Using ETD, student theses are submitted to the Oviatt Library's online repository, ScholarWorks. Once submitted to ScholarWorks, the theses will be available and searchable online. Production URL: <a href="https://www.csun.edu/etd" target="_blank" class="hyphens">http://www.csun.edu/etd</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Jewel</strong></p>
					    <p>Jewel allows developers to consume data from any RESTful JSON web service and automatically wrap the data with semantic HTML Markup. For users that need more flexibility Jewel allows for custom HTML & data pairing. Production URL: <a href="https://api.metalab.csun.edu/jewel" target="_blank" class="hyphens">https://api.metalab.csun.edu/jewel</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Roster</strong></p>
					    <p>The Roster web service provides a simple mechanism that, through the maintenance of an active roster of members, retrieves core information about an affiliation and its members. The specific information provided is dependent on the type of association. An affiliation could be anything from an academic class or department to a research group or committee. Sandbox URL: <a href="https://api.sandbox.csun.edu/metalab/roster" target="_blank" class="hyphens">https://api.sandbox.csun.edu/metalab/roster</a>.</p>
				  		</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection