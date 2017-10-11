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
      <p>Panel Component</p>
      <p>Timeline Component</p>
      <p>Forms Component</p>
      <p>Tab Component</p>

    </div>

    {{--Beginning of Panels--}}
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
        <h4 class="type--header type--thin">Panel Links</h4>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Salad</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
              <p class="pull-left margin-icon"><a href="#">Panel Link</a></p>
              <p><a href="#">Another Link</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Salad</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
              <p class="pull-left margin-icon"><a href="#">Panel Link</a></p>
              <p><a href="#">Another Link</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Salad</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
              <p class="pull-left margin-icon"><a href="#">Panel Link</a></p>
              <p><a href="#">Another Link</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <h4 class="type--header type--thin">Panel and Button</h4>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Apple</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
              <div class="btn btn-primary btn-sm">Submit</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Apple</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
              <div class="btn btn-primary btn-sm">Submit</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Apple</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
              <div class="btn btn-primary btn-sm">Submit</div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <h4 class="type--header type--thin">Panel, List, and Links</h4>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Sandwich</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
            </div>
            <ul class="list list--hover">
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
            </ul>
            <div class="panel__content">
              <p class="pull-left margin-icon"><a href="#">Panel Link</a></p>
              <p><a href="#">Another Link</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Sandwich</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
            </div>
            <ul class="list">
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
            </ul>
            <div class="panel__content">
              <p class="pull-left margin-icon"><a href="#">Panel Link</a></p>
              <p><a href="#">Another Link</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel__content">
              <p><strong>Project Sandwich</strong></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam voluptatem harum cupiditate quae aliquid quia optio suscipit ex temporibus adipisci.</p>
            </div>
            <ul class="list">
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
              <li class="list__item list--full"><a href="#">Side Nav Link</a></li>
            </ul>
            <div class="panel__content">
              <p class="pull-left margin-icon"><a href="#">Panel Link</a></p>
              <p><a href="#">Another Link</a></p>
            </div>
          </div>
        </div>
      </div>

    {{--End of Panels--}}

    {{--Beginning of Timeline--}}
      <div class="row">
        <div class="col-md-12">
          <h4 class="type--header type--thin"><i class="fa fa-clock-o margin-icon" aria-hidden="true"></i>Timeline</h4>
          <ul class="timeline">
            <li class="timeline__header"><strong>D.Sc.</strong> 1995, Cool University</li>
            <li class="timeline__header"><strong>M.S.</strong> 1990, Coolest University</li>
            <li class="timeline__header"><strong>B.S.</strong> 1986, Coolio University</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4 class="type--header type--thin">Timeline without Icons</h4>
          <ul class="timeline">
            <li class="timeline__header"><h4><strong>Staff</strong> 2012, California State University, Northridge</h4></li>
            <hr>
            <li>
              <p class="timeline__event"><b>National and State Teacher of the Year</b></p>
              <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
            </li>
            <li>
              <p class="timeline__event"></i><b>International Reading Association Awards</b></p>
              <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
            </li>
            <li>
              <p class="timeline__event"><b>Creative 5 A Day Teacher of the Year</b></p>
              <p class="timeline__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rem, totam harum in, ullam hic amet eveniet enim quas nihil magnam, impedit voluptatibus. Optio debitis, fugit quo consequatur natus at?</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h4 class="type--header type--thin">Timeline with Icons</h4>
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
          </ul>
        </div>
      </div>
    {{--End of Timeline --}}

    {{--Beginning of Forms--}}
      <div class="row">
        <div class="col-md-12">
          <h4 class="type--header type--thin"><i class="fa fa-keyboard-o margin-icon" aria-hidden="true"></i>Form</h4>
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