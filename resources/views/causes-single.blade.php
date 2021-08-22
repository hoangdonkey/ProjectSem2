@extends('layouts.master')
@section('content')

	<div class="page-heading text-center">

		<div class="container zoomIn animated">

			<h1 class="page-title">{{ $causes->cause_title }}<span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>

		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row">

				<div class="col-md-12 fadeIn animated">

					<p>
						{{$causes->description}}
					</p>

				</div>

				<div class="col-md-12 fadeIn animated">

					<div id="cause-carousel" class="carousel slide cause-carousel" data-ride="carousel">

						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#cause-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#cause-carousel" data-slide-to="1"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">

						    <div class="item active">

						      <img src="assets/images/causes/slider/cause-slider-1.jpg" alt="">

						    </div>

						    <div class="item">

						      <img src="assets/images/causes/slider/cause-slider-2.jpg" alt="">

						    </div>

						  </div>
					</div>

				</div>

			</div>

			<div class="row">
				<div class="col-md-12 fadeIn animate-onscroll">
                    <h2 class="title-style-2">Donator<span class="title-under"></span></h2>
                    <h4>List</h4>
                    <table class="table table-style-1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
            <div class="col-md-6">

                <h2 class="title-style-2">Any assistance you can provide would be greatly appreciated.<span class="title-under"></span></h2>

                <h2>Our Goal: <br> ${{$causes->goal}}</h2>
                <h2>We Raised: <br> ${{$causes->total_amount}}</h2>

            </div>
		</div>
@endsection
