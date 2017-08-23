@extends('layouts.master')

@section('title')
	Laravel Project
@endsection

@section('structure')
	<div class="wrapper bg__color--light-gray">
		<div class="main">
		<br>
		<br>
		  <div class="section">
		    <div class="container">
		      <div class="row">
		        <div class="col-sm-12">
		          <h1>Login</h1>
		        </div>
		      </div>

		      <br>
		      <div class="row">
		        <div class="col-sm-6">
		          <form>
		            <!-- Add Form Inputs Here -->
		            <div class="form__group">
			            <label class="label--required" for="Username">Username</label>
			            <input type="text" id="ex1" name="ex1">
		            </div>

		            <br>

                    <div class="form__group">
        	            <label for="Password">Password</label>
        	            <input type="password" id="ex2" name="password">
                    </div>
		          </form>
		          <br>
		          <div class="row">
		          	<div class="col-md-12">
		          		<button role="button" class="btn btn-primary"><a href="{!! url('/dashboard'); !!}">LOGIN</a></button>
		          		<div class="pull-right">
		          			<a class="btn btn-link" href="#">Forgot Password</a>
		          		</div>
		          	</div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection
