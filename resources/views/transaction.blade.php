@extends('layouts.master')
@section('content')

    <!-- FOR DEMO PURPOSE -->
<div class="container py-5" style="margin-bottom: 100px">
    <div id="" class="">
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
                <label for="username">Full name (on the card)</label>
                <input type="text" name="username" placeholder="Full Name" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">Card number</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
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
                    <label><span class="hidden-xs">Expiration</span></label>
                    <div class="input-group">
                      <input type="number" placeholder="MM" name="" class="form-control" required>
                      <input type="number" placeholder="YY" name="" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label title="Three-digits code on the back of your card">CVV
                        <i class="fa fa-question-circle"></i>
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
            <p class="text-muted">Thank you for all the support!</p>
          </div>
          <!-- End -->
        </div>
        <!-- End -->

      </div>
    </div>
  </div>
</div>

@endsection
