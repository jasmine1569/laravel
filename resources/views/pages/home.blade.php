@extends('layouts.master')

@section('title')
	Laravel Project
@endsection

@section('structure')
	<div class="wrapper">
		<div class="main">
		  <div class="section">
		    <div class="container">
		      <div class="row">
		        <div class="col-sm-12">
		          <h1>Login</h1>
		        </div>
		      </div>

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
		        </div>

		        <div class="box">
		        	hello world
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection
