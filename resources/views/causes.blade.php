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

		<div class="our-causes fadeIn animated">

	        <div class="container">

	            <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

	            <div class="row">
					@foreach($causes as $key => $data)

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-{{Str::lower($data->category)}}.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		                            {{$data -> total_amount}}$/{{$data -> goal}}$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="causes-single/{{$data -> cause_id}}">{{$data -> cause_title}}</a></h4>
		                        <div class="cause-details">
		                            {{$data->description}}
		                        </div>

		                        <div class="btn-holder text-center">
		                          <a href="causes-single/{{$data -> cause_id}}" class="btn btn-primary" data-toggle="modal" data-target="">DONATE NOW</a>
		                        </div>
		                    </div> <!-- /.cause -->
		                </div>
					@endforeach

	            </div>

	         </div>

	    </div> <!-- /.our-causes -->

	</div> <!-- /.main-container  -->

@endsection
