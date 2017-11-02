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
	      <a class="tab__link tab__link--active" href="{!! url('/meta-products'); !!}">Products</a>
	    </li>
	    <li class="tab__list">
	      <a class="tab__link" href="{!! url('/meta-web'); !!}">Web Services</a>
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
			<h4><i class="fa fa-folder-open-o margin-icon" aria-hidden="true"></i>Products</h4>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
						    <p><strong>AA2 built for Office of Equity and Diversity</strong></p>
						    <p>AA2 is an updated version of a previous web application used by the Office of Equity and Diversity. The purpose of this application is to input and manage self-identification forms used by incoming faculty and lecturers. The application also generates various reports for different based on the census data gathered. AA2 incorporates new features and functionality in addition to various improvements to the design and user interface. Production URL: <a href="https://www.metalab.csun.edu/aa2/auth/login" target="_blank" class="hyphens">https://www.metalab.csun.edu/aa2</a></p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>AS Metro-Pass built for Associate Students</strong></p>
					    <p>AS Metro Pass is a micro-application used by the Ticketing Office in conjuction with the new Metro U-Pass. It uses existing META+LAB web services to determine if students meet the unit requirements for the discounted Metro U-Pass. It also features report-generating functionality for monthly auditing purposes.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>EAS (Electronic Assessment System) built for Academic Affairs</strong></p>
					    <p>EAS is an application used for course, program and University assessment. It allows professors to create assignments and rubrics as well as view uploaded assignments. It also allows students to submit copies of their assignments into a data store for future retrieval. These assessments provide valuable feedback that helps the university to better meet student learning objectives and thus improve the quality of education. Producction URL: <a href="https://www.csun.edu/electronic-assessment-system/#/" target="_blank" class="hyphens">https://www.csun.edu/electronic-assessment-system</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>ETD (Electronic Thesis and Dissertation) built for Research and Graduate Studies</strong></p>
					    <p>ETD is a web application designed to replace the thesis paperwork students must file with Graduate Studies. ETD also eliminates the need for students to print and bind copies of their theses. Using ETD, student theses are submitted to the Oviatt Library's online repository, ScholarWorks. Once submitted to ScholarWorks, the theses will be available and searchable online. Production URL: <a href="https://www.csun.edu/etd" target="_blank" class="hyphens">http://www.csun.edu/etd</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Faculty Profiles built for the Provost Office</strong></p>
					    <p>Faculty Profiles provides CSUN faculty members with a professional web presence designed to enhance communication and collaboration. Key information about each faculty member is provided. This includes academic, professional, and service-related activities. Production URL: <a href="http://www.csun.edu/faculty/profiles" target="_blank" class="hyphens">http://www.csun.edu/faculty/profiles</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Faculty Stories built for the Faculty Affairs</strong></p>
					    <p>Faculty Stories provides the opportunity for current and prospective faculty members and students to learn about CSUN’s faculty members by showcasing videos, pictures, and interviews that highlight the personal lives, community involvement, and scholarly activity of these members. Production URL: <a href="http://www.csun.edu/faculty/stories" target="_blank" class="hyphens">http://www.csun.edu/faculty/stories</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Faculty Scholarship built for Research and Graduate Studies</strong></p>
					    <p>Scholarship is an application that enables faculty members to easily search through an organized database of expertise. It provides a more easily-accessible means to collaborate and connect through interdisciplinary research, showcase projects, list areas of expertise, and share resources with fellow faculty members. Production URL: <a href="http://www.csun.edu/faculty/scholarship" target="_blank" class="hyphens">http://www.csun.edu/faculty/scholarship</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>IMS (Internal Management System) built for Official Police Garages</strong></p>
					    <p>Internal Management System (IMS) is a web application that keeps track of towing data for an official police garage of the City of Los Angeles.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Language Lab built for Barbara Ann Ward Language Center</strong></p>
					    <p>Language Lab is an inventory system that provides the Language Center with a database that will enable them to operate more effectively while tracking any type of change in laboratory inventory.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Late Add Drop built for Undergraduate Students</strong></p>
					    <p>Late Add Drop is a web application developed for CSUN Academic Affairs that allows CSUN students to add and drop classes from their schedule after the respective deadlines. Production URL: <a href="https://www.metalab.csun.edu/late-add-drop" target="_blank" class="hyphens">https://www.metalab.csun.edu/late-add-drop</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>Learn and Earn built for the CSU Chancellor's Office</strong></p>
					    <p>Learn and Earn is a web application that provides the user the opportunity to access data related to majors, industries and annual earnings of former CSUN students two, five and ten years after they left CSUN. It also provides a comparison between students who didn’t complete their college degree, those who did and those who went to graduate school. This web application enables students, parents, counselors and any other user to explore the possibilities of getting a college degree. Production URL: <a href="https://www.metalab.csun.edu/learnandearn" target="_blank" class="hyphens">https://www.metalab.csun.edu/learnandearn</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>UDWPE built for Undergraduate Studies</strong></p>
					    <p>UDWPE is an electronic version of the Upper Division Writing Proficiency Exam. It is meant to provide a more sustainable and accessible process for all testers. Production URL: <a href="https://www.csun.edu/udwpe-exam/" target="_blank" class="hyphens">https://www.csun.edu/udwpe-exam/</a>.</p>
				  		</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel main--panel">
					  	<div class="panel__content">
					    <p><strong>10 Letters</strong></p>
					    <p>10 Letters is an application with a life-changing purpose: To transform the individual by reinforcing 10 meaningful letters in a program that takes less than 10 minutes per week.</p>
				  		</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection