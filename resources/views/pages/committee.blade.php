@extends('layouts.app')

@section('metatags')
  <meta name="description" content="Jointly organised by CIT Kokrajhar and Bodoland University, Assam Science Society"/>
  <meta name="keywords" content="organisers, committee, 4btechnologies, asset18, asset2018, asset, assam science society, cit, cit kokrajhar, assam, bu, bodoland university, university conference, national conference assam, Green Science and Technology for Cleaner Society"/>
@endsection

@section('title', 'Committee - 63RD Annual Technical Session of Assam Science Society 2018')

@section('styles')
  <style media="screen">

  </style>
  <link href="css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/swiper.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')

  <section id="commitee" class="grey lighten-3">
    <div class="container">
      <div class="row">

        <div class="patrons col s12 m12 grey lighten-3 card z-depth-0">

          <div class="col s12 m6 offset-m3">
              <div class="profile-item teal lighten-3 white-text card valign-wrapper">
                {{--<img src="{{ asset('image/profile/avatar.jpg') }}" style="width: 40%; border-radius: 50%; " alt="Chief Patron Asset 2018">
                <span class="fa fa-slack fa-3x" style="background: teal; color: white; border-radius: 50%; padding: .4rem .5rem; margin: 0 1rem;"></span>
--}}
                <span style="margin: 0 1rem;"><img class="circle" style="width: 80%" src="{{ asset('image/speakers/kampa.jpg') }}" alt=""></span>
                <span class=""><strong class="grey-text text-darken-3">CHIEF PATRON</strong><br>
                <strong>Mr. Kampa Borgoyary, </strong><span class="">Deputy Chief, BTC</span></span>
              </div>
          </div>

          <div class="clearfix"></div>
          <div class="col s12 m1"></div>
          <div class="col s12 m5 l5">
            <div class="profile-item teal lighten-3 white-text valign-wrapper card">
              {{--<img src="{{ asset('image/profile/avatar.jpg') }}" style="width: 40%; border-radius: 50%;" alt="Chief Patron Asset 2018">
              <span class="fa fa-slack fa-3x" style="background: teal; color: white; border-radius: 50%; padding: .4rem .5rem; margin: 0 1rem;"></span> --}}
              <span style="margin: 0 1rem;"><img class="circle" style="width: 80%" src="{{ asset('image/speakers/buvc.jpg') }}" alt=""></span>
              <span class=""><strong class="grey-text text-darken-3">PATRON</strong><br>
              <strong>Prof. Hemanta Kumar Baruah</strong><span class="">VC, Bodoland University</span></span>
            </div>
          </div>
          <div class="col s12 m5 l5">
            <div class="profile-item teal lighten-3 white-text valign-wrapper card">
              {{-- <img src="{{ asset('image/profile/avatar.jpg') }}" style="width: 40%; border-radius: 50%;" alt="Chief Patron Asset 2018">
              <span class="fa fa-slack fa-3x" style="background: teal; color: white; border-radius: 50%; padding: .4rem .5rem; margin: 0 1rem;"></span> --}}
              <span style="margin: 0 1rem;"><img class="circle" style="width: 80%" src="{{ asset('image/speakers/director.jpg') }}" alt=""></span>
              <span class=""><strong class="grey-text text-darken-3">CHAIRMAN</strong><br>
              <strong>Prof. Debkumar Chakrabarty</strong><span class="">Director, CIT</span></span>
            </div>
          </div>
        </div>


        <div class="clearfix"></div>

        <div class="advisors card">
          <h5 class="center advisors-header">National Advisory Board</h5>
          <div class="col s12 m12 grey lighten-5">

            <div class="col s12 m6">
              <ul class="advisor-list">
                <li><strong>Dr. H Kharkwal</strong>
                  <span>Joint Director, Ministry of Environment, Forest and Climate Change Indira Paryavaran Bhawan, New Delhi.</span></li>
                <li><strong>Prof. Bhupendra Nath Goswami</strong>
                  <span>(Former Director,Indian Institute of Tropical Meteorology (IITM); Shanti Swarup Bhatnagar awardee), Pune</span></li>
                <li><strong>Prof.Dhiraj Bora</strong>
                  <span>Vice Chancellor, Assam Science Technical University, Guwahati</span></li>
                <li><strong>Prof. Khanindra Pathak</strong>
                  <span>Department of Mining Engineering, IIT Kharagpur</span></li>
                <li><strong>Prof. S N Naik</strong>
                  <span>Department of Center for Rural Development and Technology, IIT Kharagpur</span></li>
                <li><strong>Prof. Nikhil Kumar Singha</strong>
                  <span>(Professor in Rubber Technology, IIT Kharagpur)</span></li>
                <li><strong>Prof. Dilip Kumar Kakati</strong>
                  <span>Department of Chemistry, Gauhati University, Guwahati</span></li>
                <li><strong>Prof. Monomoy Goswami</strong>
                  <span>Department of Civil Engineering, CIT Kokrajhar</span></li>
              </ul>
            </div>

            <div class="col s12 m6">
              <ul class="advisor-list">
                <li><strong>Prof. Hemanta Kumar Kalita</strong>
                  <span>Department of Computer Science and Engineering, &nbsp; CIT Kokrajhar</span></li>
                <li><strong>Prof. Uday S Dixit</strong>
                  <span>Department of Mechanical Engineering, IIT Guwahati</span></li>
                <li><strong>Prof. Ramesh Ch. Deka</strong>
                  <span>Department of Chemical Sciences, Tezpur University</span></li>
                <li><strong>Prof. B K Das</strong>
                  <span>Department of Chemistry, Gauhati University</span></li>
                <li><strong>Prof. Madhurjya P Bora</strong>
                  <span>Department of Physics, Gauhati University</span></li>
                <li><strong>Dr. Arup Kumar Misra</strong>
                  <span>Director, Assam Science Technology &amp; Environment Council, Guwahati</span></li>
                <li><strong>Dr. B. P. Patro</strong>
                  <span>Director, Central Institute of Plastics Engineering &amp; Technology, Guwahati</span></li>
                <li><strong>Prof. Nirmalendu Saha</strong>
                  <span>Department of Zoology, North Eastern Hills University, &nbsp; Shillong</span></li>
              </ul>
            </div>

          </div>
          <!-- /End of Advisor Card -->

          <div class="clearfix"></div>

          <h5 class="center committee-header">Members, Organising Committee</h5>
          <div class="col s12 m12 grey lighten-5">

            <div class="col s12 m6">
              <ul class="organising-list">
                <li style="border: none!important; background: none!important;"><strong class="teal-text text-darken-3">ASSAM SCIENCE SOCIETY</strong></li>
                <li><strong>Dr. Soneswar Sarma</strong>
                  <span>President</span></li>
                <li><strong>Dr. Mohan Ch. Kalita</strong>
                  <span>Working President</span></li>
                <li><strong>Dr. Dhireswar Kalita</strong>
                  <span>Vice President</span></li>
                <li><strong>Mr. Pradip Neog</strong>
                  <span>Vice President</span></li>
              </ul>
            </div>
            <div class="col s12 m6">
              <ul class="organising-list">
                <li style="border: none!important; background: none!important;">&nbsp;</li>
                <li><strong>Mr. Jaideep Baruah</strong>
                  <span>General Secretary</span></li>
                <li><strong>Dr. Dwijen Kalita</strong>
                  <span>Joint Secretary-Office Management</span></li>
                <li><strong>Prof. Suresh Deka</strong>
                  <span>Chairman, Technical Session</span></li>
              </ul>
            </div>

            <div class="clearfix"></div>
            <div class="divider"></div>
            <div class="col s12 m6">
              <ul class="organising-list">
                <li style="border: none!important; background: none!important;"><strong class="teal-text text-darken-3">CIT KOKRAJHAR ASSAM</strong></li>
                <li><strong>Dr. Gunajyoti Das</strong>
                  <span>Asstt. Prof, Dept. of Chemistry, CIT Kokrajhar</span></li>
                <li><strong>Dr. Aranendu Mondal</strong>
                  <span>Asso. Prof, Dept. of Chemistry, CIT Kokrajhar</span></li>
                <li><strong>Mrs. Anamika Kalita</strong>
                  <span>Asst. Prof, Dept. of Chemistry, CIT Kokrajhar</span></li>
                <li><strong>Dr. Sandeep Kr Srivastava</strong>
                  <span>HoD &amp; Dean of R &amp; D, Asso. Prof, Dept of Physics, CIT Kokrajhar</span></li>
                <li><strong>Mr. A. Alvis Basumatary</strong>
                  <span>Asso. Prof, Dept. of Mathematics, CIT Kokrajhar</span></li>
                <li><strong>Dr. Ambeswar Phukon</strong>
                  <span>Asso. Prof, Dept. of Mathematics, CIT Kokrajhar</span></li>
                <li><strong>Dr. Pankaj Pratap Singh</strong>
                  <span>HoD, Asstt. Prof, Computer Science and Engineering, CIT Kokrajhar</span></li>
                <li><strong>Mr. Jeet Dutta</strong>
                  <span>HoD, Asstt. Prof, Dept. of Instrumentation Engineering, CIT Kokrajhar</span></li>
                <li><strong>Mr. Anuck Islary</strong>
                  <span>Asstt. Prof, Dept. of Food Processing Engineering, CIT Kokrajhar</span></li>
                <li><strong>Mr. J D H Basumatary</strong>
                  <span>Dean of Student Affairs,Asstt. Prof, Dept. of Humanities &amp; Social Sciences, CIT Kokrajhar</span></li>
                <li><strong>Mr. Bihung Brahma</strong>
                  <span>HoD, Asstt. Prof. Dept. of Humanities &amp; Social Sciences, CIT Kokrajhar</span></li>
              </ul>
            </div>
            <div class="col s12 m6">
              <ul class="organising-list">
                <li style="border: none!important; background: none!important;"><strong class="teal-text text-darken-3">BODOLAND UNIVERSITY ASSAM</strong></li>
                <li><strong>Dr. Jatin Sarmah</strong>
                  <span>Asso. Prof, Dept. of Biotechnology, BU</span></li>
                <li><strong>Dr. Sandeep Das</strong>
                  <span>Asstt. Prof. Dept. of Biotechnology, BU</span></li>
                <li><strong>Dr. Sanjib Baruah</strong>
                  <span>Asstt. Prof. Dept. of Botany, BU</span></li>
                <li><strong>Dr. Sanjay Basumatary</strong>
                  <span>Asstt. Prof. Dept. of Chemistry, BU</span></li>
                <li><strong>Dr. Rajeeb Brahma</strong>
                  <span>Asstt. Prof. Dept. of Physics, BU</span></li>
                <li><strong>Dr. Kalyan Dey</strong>
                  <span>Asstt. Prof. Dept. of Physics, BU</span></li>
                <li><strong>Dr. Dulur Brahma</strong>
                  <span>Asstt. Prof. Dept. of Zoology, BU</span></li>
                <li><strong>Dr. Manoj Kumar Deka</strong>
                  <span>Asstt. Prof. Dept. of Computer Science and Technology, BU</span></li>
                <li><strong>Dr. Kangujam Priyokumar Singh</strong>
                  <span>Asso. Prof. Dept. of Mathematical Sciences, BU</span></li>
                <li><strong>Mr. Hem Chandra Das</strong>
                  <span>Asstt. Prof. Dept. of Computer Science &amp; Technology, BU</span></li>
              </ul>
            </div>
          </div>
          <!-- /End of Organising Committee -->

          <div class="clearfix"></div>

          <div class="manager white center">
            <a href="{{ url('//4btechnologies.in') }}">
              <span class="grey-text">Managed By | &nbsp;</span><img src="{{ asset('image/manager.png') }}" style="width: 20%"/>
            </a>
          </div>
          <!-- /End of Event Manager -->
        </div>

      </div>
    </div>
  </section>

  <!-- Sponsors -->
  @include('layouts._includes.sponsor')
@endsection

@section('scripts')
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
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


        $(document).ready(function(){
        $("#feature-map").click(function(){
      			 $(this).find('iframe').addClass('clicked')}).mouseleave(function(){
      			   $(this).find('iframe').removeClass('clicked')
            });
        });

    </script>
@endsection
