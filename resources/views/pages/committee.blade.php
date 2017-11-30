@extends('layouts.app')

@section('title', 'Committee - 63RD Annual Technical Session of Assam Science Society 2018')

@section('styles')
  <style media="screen">
  #speakers{
    background: url('image/bg-speakers.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }

  #details{
    background: url('image/bg-programs.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }
  </style>
  <link href="css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/swiper.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')

  <section id="commitee" class="grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="patrons col s12 m12 green card">
          <div class="col s12 m4 l4">
            <div class="profile-item white-text center">
              <img src="{{ asset('image/profile/avatar.jpg') }}" style="width: 40%; border-radius: 50%;" alt="Chief Patron Asset 2018">
              <span><strong>Chief Patron</strong></span>
              <span>Mr. Kampa Borgoyary, <span class="grey-text text-lighten-3">Deputy Chief, BTC</span></span>
            </div>
          </div>

          <div class="col s12 m4 l4">
            <div class="profile-item white-text center">
              <img src="{{ asset('image/profile/avatar.jpg') }}" style="width: 40%; border-radius: 50%;" alt="Chief Patron Asset 2018">
              <span><strong>Patron</strong></span>
              <span>Prof. Hemanta Kumar Baruah<span class="grey-text text-lighten-3">VC, Bodoland University</span></span>
            </div>
          </div>

          <div class="col s12 m4 l4">
            <div class="profile-item white-text center">
              <img src="{{ asset('image/profile/avatar.jpg') }}" style="width: 40%; border-radius: 50%;" alt="Chief Patron Asset 2018">
              <span><strong>Chairman</strong></span>
              <span>Prof. Debkumar Chakrabarty<span class="grey-text text-lighten-3">Director, CIT</span></span>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="advisors card">
          <h5 class="center advisors-header">National Advisory Board</h5>
          <div class="col s12 m12 grey lighten-3">

            <div class="col s12 m6">
              <ul class="advisor-list">
                <li><strong>Dr. H Kharkwal</strong>
                  <span>Joint Director, Ministry of Environment, Forest and Climate Change Indira Paryavaran Bhawan, New Delhi.</span></li>
                <li><strong>Prof. Bhupendra Nath Goswami</strong>
                  <span>(Former Director,Indian Institute of Tropical Meteorology (IITM); Shanti Swarup Bhatnagar awardee), Pune</span></li>
                <li><strong>Prof. Nikhil Kumar Singha</strong>
                  <span>(Professor in Rubber Technology, IIT Kharagpur)</span></li>
                <li><strong>Prof. Monomoy Goswami</strong>
                  <span>Department of Civil Engineering, CIT Kokrajhar</span></li>
                <li><strong>Prof. Hemanta Kumar Kalita</strong>
                  <span>Department of Computer Science and Engineering, CIT Kokrajhar</span></li>
                <li><strong>Prof. Uday S Dixit</strong>
                    <span>Department of Mechanical Engineering, IIT Guwahati</span></li>
                <li><strong>Prof. S N Naik</strong>
                    <span>Department of Center for Rural Development and Technology, IIT Delhi</span></li>
              </ul>
            </div>

            <div class="col s12 m6">
              <ul class="advisor-list">
                <li><strong>Prof. B K Das</strong>
                  <span>Department of Chemistry, Gauhati University</span></li>
                <li><strong>Prof. Madhurjya P Bora</strong>
                  <span>Department of Physics, Gauhati University</span></li>
                <li><strong>Dr. Arup Kumar Misra</strong>
                  <span>Director, Assam Science Technology &amp; Environment Council, Guwahati</span></li>
                <li><strong>Dr. N.C Talukdar</strong>
                  <span>Director, Institute of Advanced Study in Science and Technology, Guwahati</span></li>
                <li><strong>Prof. Joyanti Chutia</strong>
                  <span>Former Director, Institute of Advanced Study in Science and Technology, Guwahati</span></li>
                <li><strong>Dr. B. P. Patro</strong>
                  <span>Director, Central Institute of Plastics Engineering &amp; Technology, Guwahati</span></li>
              </ul>
            </div>

          </div>
          <!-- /End of Advisor Card -->

          <div class="clearfix"></div>

          <h5 class="center committee-header">Organising Committee</h5>
          <div class="col s12 m12 grey lighten-3">
            <div class="col s12 m6">
              <ul class="organising-list">
                <li><strong>Dr. Gunajyoti Das</strong>
                  <span>Asstt. Prof, Dept. of Chemistry, CIT Kokrajhar</span></li>
                <li><strong>Dr. Aranendu Mondal</strong>
                  <span>Asso. Prof, Dept. of Chemistry, CIT Kokrajhar</span></li>
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
                <li><strong>Mr. Abhijit Das</strong>
                  <span>Asstt. Prof, Dept. of Food Processing Engineering, CIT Kokrajhar</span></li>
                <li><strong>Mr. J D H Basumatary</strong>
                  <span>Dean of Student Affairs,Asstt. Prof, Dept. of Humanities &amp; Social Sciences, CIT Kokrajhar</span></li>
                <li><strong>Mr. Bihung Brahma</strong>
                  <span>HOD, Asstt. Prof. Dept. of Humanities &amp; Social Sciences, CIT Kokrajhar</span></li>
              </ul>
            </div>
            <div class="col s12 m6">
              <ul class="organising-list">

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
