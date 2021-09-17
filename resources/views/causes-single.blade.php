@extends('layouts.master')
@section('content')

	<div class="page-heading text-center">

		<div class="container zoomIn animated">

			<h1 class="page-title">{{ $causes -> cause_title }}<span class="title-under"></span></h1>
			<p class="page-description">
				{{$causes -> category}}
			</p>

		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row">

				<div class="col-md-12 fadeIn animated">

					<p>
						{{$causes -> description}}
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
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$user -> name}}</td>
                                <td>{{$user -> email}}</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
            <div class="col-md-6">

                <h2 class="title-style-2">Any assistance you can provide would be greatly appreciated.<span class="title-under"></span></h2>

                <h2>Our Goal: <br> ${{$causes -> goal}}</h2>
                <h2>We Raised: <br> ${{$causes -> total_amount}}</h2>

            </div>
		</div>
        <div class="container py-5" style="margin-bottom: 100px">
            <div id="" class="">
                <h3><strong>Please choose a payment method</strong></h3>
                <p class="text-muted">Thank you for all the support!</p>
              </div>





          <div class="row">
            <div class="col-lg-7 mx-auto">
              <div class="bg-white rounded-lg shadow-sm p-5">
                <!-- Credit card form tabs -->
                <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                  <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                        <i class="fa fa-credit-card"></i>
                                        Credit Card
                                    </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                        <i class="fa fa-university"></i>
                                         Bank Transfer
                                     </a>
                  </li>
                </ul>
                <!-- End -->


                <!-- Credit card form content -->
                <div class="tab-content">

                  <!-- credit card info-->
                  <div id="nav-tab-card" class="tab-pane fade">
                    <form role="form">
                      <div class="form-group">
                        <label for="username">Full Name (Credit Card)</label>
                        <input type="text" name="username" placeholder="Full Name" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                        <div class="input-group">
                          <input type="text" name="cardNumber" placeholder="Your Card Number" class="form-control" required>
                          <div class="input-group-append">
                            <span class="input-group-text text-muted">
                                <i class="fa fa-cc-visa mx-1"></i>
                                <i class="fa fa-cc-amex mx-1"></i>
                                <i class="fa fa-cc-mastercard mx-1"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-group">
                            <label><span class="hidden-xs">Expiration Date</span></label>
                            <div class="input-group">
                              <input type="number" placeholder="MM" name="" class="form-control" required>
                              <input type="number" placeholder="YY" name="" class="form-control" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group mb-4">
                            <label title="Three-digits code on the back of your card">CVV(3 last digits at the back of your card)
                            </label>
                            <input type="text" required class="form-control">
                          </div>
                        </div>
                      </div>
                      <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
                    </form>
                  </div>
                  <!-- End -->

                  <!-- bank transfer info -->
                  <div id="nav-tab-bank" class="tab-pane fade">
                    <h3>Please send with message in format:<br>Your Name - Cause</h3>
                    <h3><strong>Bank account details</strong></h3>
                    <dl>
                      <dt>Bank</dt>
                      <dd>TechCom Bank</dd>
                    </dl>
                    <dl>
                      <dt>Account number</dt>
                      <dd>7775877975</dd>
                    </dl>
                    <dl>
                      <dt>Name</dt>
                      <dd>Ha Tien Dung</dd>
                    </dl>
                  </div>
                  <!-- End -->
                </div>
                <!-- End -->

              </div>
            </div>
          </div>
        </div>

    </div>
@endsection
