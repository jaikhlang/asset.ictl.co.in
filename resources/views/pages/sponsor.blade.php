@extends('layouts.app')

@section('title', 'Sponsorship - 63RD Annual Technical Session of Assam Science Society 2018')

@section('styles')
  <style media="screen">

  </style>
  <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')

  <!-- About CIT & BU Kokrajhar -->

  <section id="about-host" class="grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="" style="padding: 10rem 0;">
            <h5 class="center">Will Be updated soon</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sponsors -->
  @include('layouts._includes.sponsor')
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
@endsection
