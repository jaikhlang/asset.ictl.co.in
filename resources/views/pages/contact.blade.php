@extends('layouts.app')
@section('title', 'Contact - 63RD Annual Technical Session of Assam Science Society 2018')
@section('styles')
  <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style>
      #feature-map{
        overflow: hidden;
        height: 400px;
        border-top: 1px solid #e7ebf3;
        border-bottom: 1px solid #e7ebf3;
      }
      #feature-map .gmap{
        width: 100%;
      }
      #feature-map iframe{
        pointer-events: none;
      }
      #feature-map iframe.clicked{
        pointer-events: auto;
      }
      #map {
        height: 100%;
      }
    </style>
@endsection
@section('content')

  <!-- Venue -->
  <section id="venue" class="grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <h5 class="black-text">Conference Venue</h5>
        </div>
        <div class="col s12 m12">
          <blockquote class="">
            <h5>Central Institute of Technology Kokrajhar</h5>
            <div class="grey-text text-darken-1">
              <span>PO: Rangalikhata, Dist: Kokrajhar, BTAD, Assam India 783370</span><br>
              <span><a href="{{ url('//www.cit.ac.in') }}" target="_blank">www.cit.ac.in</a></span>
            </div>
          </blockquote>
          <div class=" grey-text text-darken-1">
            The conference venue CIT can easily be reached from the various parts of India by air,
            train and road. The Kokrajhar railway station is 10 Km away from the conference venue and
            the road connecting Kokrajhar town to the NH-31 goes touching CIT on its left. The nearest
            airports are LGB international airport in Guwahati, Assam and Bagdogra international
            airport at Siliguri, West Bengal. It will take 4 hours by Taxi to reach CIT from Guwahati.
            There are also bus services available from Guwahati of Assam to Kokrajhar and Alipurduar
            of West Bengal to Kokrajhar.

            <div class="convenor-contact">
              <h5 class="grey-text text-darken-1"> For any kind of queries contact  Conference Coordinator</h5>
              <span class="valign-wrapper">
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="card blue-text" style="padding: 0.6rem">
                  <span class="grey-text">(Convenor)</span><br>
                  <span class="grey-text text-darken-1">Dr. Pranjal Kalita</span>
                  <br>+918447294108
                  <br>p.kalita@cit.ac.in</span>
                &nbsp;&nbsp;
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="card blue-text" style="padding: 0.6rem">
                  <span class="grey-text">(Convenor)</span><br>
                  <span class="grey-text text-darken-1">Dr. Dhrubajyoti Haloi</span>
                  <br>+917896777085
                  <br>dhruba.2k3@gmail.com</span>
                &nbsp;&nbsp;
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="card blue-text" style="padding: 0.6rem">
                  <span class="grey-text">(Co-Convenor)</span><br>
                  <span class="grey-text text-darken-1">Dr. Manasi Buzar Baruah</span>
                  <br>+919435120216
                  <br>mbbaruah@cit.ac.in</span>
                &nbsp;&nbsp;
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="card blue-text" style="padding: 0.6rem">
                  <span class="grey-text">(Co-Convenor)</span><br>
                  <span class="grey-text text-darken-1">Dr. Ananta Swargayari</span>
                  <br>+919854050781
                  <br>ananbuzoo101@gmail.com</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map -->
  <section id="feature-map" class="grey lighten-3">
      <div class="feature-content">
        <div class="gmap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m32!1m12!1m3!1d96149.49385067052!2d90.21823852396592!3d26.417765931489384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m17!3e0!4m5!1s0x3758603a91fe253b%3A0x660981d88e87a7ac!2sKokrajhar%2C+Tengapara%2C+Kokrajhar%2C+Assam+783370!3m2!1d26.404945899999998!2d90.273398!4m5!1s0x37588ac7dfe906d1%3A0x8ea13d15f609b6a1!2sBodoland+University%2C+Kokrajhar%2C+Assam!3m2!1d26.470130899999997!2d90.2942937!4m3!3m2!1d26.4775472!2d90.3009814!5e0!3m2!1sen!2sin!4v1511627293133" width="100%" height="400" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>

          <div class="navigation">
            <div class="container center">
              <div class="card z-depth-1 light">
                <span class="material-icons">train</span> Nearest Railhead - Kokrajhar, Bongaigaon <span class="material-icons">local_airport</span> Nearest Airport - IGBI Guwahati Airport
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

{{--
  <section id="knowHost" class="grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <a class="{{ route('abouts.about') }}">
            <div class="card host-item">
                <span>Bodoland University Kokrajhar
                <br>BTAD Bodoland Assam 783370</span>
            </div>
          </a>
        </div>

        <div class="col s12 m6">

          <a class="">
            <div class="card host-item">
                <span class="host-item-text">
                  Bodoland University Kokrajhar
                  <br>BTAD Bodoland Assam 783370
                </span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  --}}

@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
  <script>
  $(document).ready(function(){
  $('.directions-card').attr('style', 'display:none!important');
  $("#feature-map").click(function(){
       $(this).find('iframe').addClass('clicked')}
    ).mouseleave(function(){
         $(this).find('iframe').removeClass('clicked')
      });
  });
  </script>
@endsection
