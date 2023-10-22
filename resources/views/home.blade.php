@extends('layouts.app')


@section('content')
<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
        <br>
        <br>
        <center>
            <div class="col-xl-7 col-lg-9 text-center">
              <h1>Welcome to simple ChatApp</h1>
              <h2>This ChatApp was created to complete the fullstack engineer assessment</h2>
            </div>
          </div>
        </center>
    <div class="text-center">
      <a href="{{ url('/chat') }}" class="btn btn-primary btn-lg">Get Started</a>
    </div>
@endsection
