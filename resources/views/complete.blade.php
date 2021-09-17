@extends('layouts.master')
@section('content')
<div class="page-heading text-center">

    <div class="container zoomIn animated">

        <h1 class="page-title">OUR CAUSES <span class="title-under"></span></h1>
        <p class="page-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
        </p>

    </div>

</div>

  <div class="main-container">
      <div style="text-align: center">
          <h1 class="title-style-1">Thank you for your donation!</h1>
          <h3>"A single act of kindness throws out roots in all directions, and the roots spring up and make new trees." <br>
            Amelia Earhart</h3>
            <a style="margin-bottom: -50px"class="btn btn-primary" href="{{url('causes')}}" >Back to Causes</a>
      </div>
  </div>

@endsection
