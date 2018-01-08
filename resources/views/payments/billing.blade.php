@extends('layouts.app')

@section('title', 'Billing Information - Conference Payments')

@section('styles')
  <link href="{{ asset("css/owl.carousel.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset("css/swiper.min.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>

@endsection

@section('content')

<section id="billing-form" class="grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12" style="padding-bottom: 2rem;">
        <span class="center grey-text text-darken-1">Hey #{{ $user->name }}, your registration is almost complete. Proceed with Payment.</span>
      </div>
      <div class="clearfix"></div>

      <div class="col s12 m12">
        <div class="card-panel">
          <span>
            <a href="{{ route('paper.submit') }}" class="btn btn-wave wave-light red">Have a paper to submit? Submit Now</a>
          </span>
          <span class="green-text">
            &nbsp;&nbsp; Paper on acceptance, notification mail will be sent to your email.
          </span>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card-panel white z-depth-0">
          <strong class="blue-text">Registration Fee</strong>
          <form class="" action="{{ route('payments.pay') }}" method="POST">
            {{ method_field('POST') }}
            {{ csrf_field() }}
            <div>
              <span class="chip">Category: {{ $user->category }}</span><br>
              <span>Early Bird Registration Rs. {{ $fee }}/- INR</span><br>
              <!--span>Late Registration Rs. {{ $latefee }}/- INR</span-->
            </div><br>
            <input type="hidden" name="fee" value="{{ $fee }}">

            <button type="submit" class="btn blue" style="width: 100%">Pay Now</button>
          </form>

        </div>
      </div>
      <div class="col s12 m6">
        <div class="card-panel white-text blue z-depth-1 details-provided">
          <strong class="white-text">Details Provided</strong>
          <div class="divider"></div><br>
            <strong>Name:</strong>
            <span style="padding-left: .8rem;">{{ $user->name }}</span>
            <strong>Address:</strong>
            <span style="padding-left: .8rem;">{{ $user->address }} {{ $user->pin }}</span>
            <strong>Email:</strong>
            <span style="padding-left: .8rem;">{{ $user->email }}</span>
            <strong>Phone:</strong>
            <span style="padding-left: .8rem;">{{ $user->phone }}</span>
          </form>
        </div>
      </div>


    </div>
  </div>
</section>

<!-- Sponsors -->
@include('layouts._includes.sponsor')

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset("js/owl.carousel.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/swiper.min.js") }}"></script>
    <script type="text/javascript">
      //Carousel
      //$('.carousel.carousel-slider').carousel({fullWidth: true, duration: 200, dist: -20, indicators: true});
      $(document).ready(function(){
        $('.carousel.carousel-slider').carousel({fullWidth: true, duration: 200, dist: -20, indicators: true});
            setInterval(function() {
            $('.carousel').carousel('next');
          }, 4500);
      });

      $(document).ready(function () {
          //initialize swiper when document ready
          var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            pagination: '.swiper-pagination',
            paginationClickable: true,
            direction: 'horizontal',
            autoHeight: true,
            setWrapperSize: true,
            loop: true,
            autoplay: 2500,
            autoplayDisableOnInteraction: false
          })
        });


    </script>
@endsection
