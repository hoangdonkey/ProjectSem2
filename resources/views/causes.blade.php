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

		                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
		                            {{$data -> total_amount}}$/{{$data -> goal}}$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="{{url('causes-single')}}">{{$data -> cause_title}}</a></h4>
		                        <div class="cause-details">
		                            {{$data->description}}
		                        </div>

		                        <div class="btn-holder text-center">
		                          <a href="{{url('causes-single')}}" class="btn btn-primary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
		                        </div>
		                    </div> <!-- /.cause -->
		                </div>
					@endforeach
		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>


		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		                            400$ / 1000$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>



		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
		                            10$ / 500$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>


		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		                            400$ / 1000$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

		                        </div>



		                    </div> <!-- /.cause -->

		                </div>


	            </div>

	         </div>

	    </div> <!-- /.our-causes -->




	</div> <!-- /.main-container  -->

    @endsection

    </body>
</html>
