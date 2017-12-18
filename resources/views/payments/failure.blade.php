@extends('layouts.app')

@section('title', 'Payment Failure - Conference Registration Payments')

@section('styles')
  <link href="{{ asset("css/owl.carousel.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset("css/swiper.min.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style media="screen">
    #success{
      padding: 10rem 0;
    }
  </style>
@endsection

@section('content')

<section id="success" class="success-registration grey lighten-3">
  <div class="container">
    <div class="col s12 m12">
      <div class="center success-message">
        <div class="card z-depth-0" style="padding: 2rem 0;">

          <p class="red-text">Hey! {{ $user->name }}, Your registration failed due to payment failure</p>
          <a href="{{ route('payments.pay') }}" class="btn wave">Try Again</a>

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


    </script>
@endsection
