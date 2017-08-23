@extends('layouts.master')
@section('structure')
  <div class="section section--lg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            @yield('content')
        </div>
      </div>
    </div>
  </div>
@endsection