@extends('layouts.app')

@section('title', 'Successful Registration & Payment - Conference Payments')

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
          <p>Hey! {{ $user->name }}, You have successfully registered for the Conference</p>

          <p><a href="{{ route('print.application') }}" class="btn wave">View Application</a> &nbsp;&nbsp;<a href="{{ route('print.invoice') }}" class="btn wave">View Payment Invoice</a></p>
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
