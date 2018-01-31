@extends('layouts.app')

@section('metatags')
  <meta name="description" content="Call for Paper, An abstract of paper not exceeding 200 words should be submitted to asset.2k18@gmail.com"/>
  <meta name="keywords" content="call for paper, paper submission, asset18, asset2018, asset, assam science society, cit, cit kokrajhar, assam, bu, bodoland university, university conference, national conference assam, Green Science and Technology for Cleaner Society"/>
@endsection

@section('title', 'Call For Paper - 63RD Annual Technical Session of Assam Science Society 2018')

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
  <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')

  <!-- Call for paper -->
  <section id="paper" class="callforpaper grey lighten-3" style="overflow: hidden;">
      <div class="container">
          <div class="row">
            <div class="col s12">
              <div class="card-panel">
                <div class="card-text" style="overflow: hidden;">
                  <div class="col s12 m4">
                    <div class="">
                      <span class="valign-wrapper">
                        <span style="padding: .3rem;" class="card red white-text z-depth-0 fa  fa-star-half-full fa-3x"></span>
                        <span class="red-text" style="margin-left: .6rem;">BEST PAPER AWARD<br> <span class="grey-text">with Certificate of Merit.</span></span>
                      </span>
                    </div>
                  </div>

                  <div class="col s12 m4">
                    <div class="">
                      <span class="valign-wrapper">
                        <span style="padding: .3rem;" class="card green white-text z-depth-0 fa  fa-star-half-full fa-3x"></span>
                        <span class="green-text" style="margin-left: .6rem;">BEST PRESENTATION AWARD<br> <span class="grey-text">with Certificate of Merit.</span></span>
                      </span>
                    </div>
                  </div>

                  <div class="col s12 m4">
                    <div class="">
                      <span class="valign-wrapper">
                        <span style="padding: .3rem;" class="card light-blue white-text z-depth-0 fa  fa-star-half-full fa-3x"></span>
                        <span class="light-blue-text" style="margin-left: .6rem;">BEST POSTER AWARD<br> <span class="grey-text">with Certificate of Merit.</span></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="clearfix"></div>
              <div class="col s12 m8">
                <div class="card-panel white lighten-5 z-depth-1">
                    <h5>Aim &amp; Scopes</h5>
                    <p class=" text-justified">
                      This conference provides a National forum for academician researchers, developers and industry professional to exchange their valuable ideas and showcase the ongoing works
                      which may lead to path breaking foundation of the futuristic growth in science engineering and technology. The aim of this conference is to deliberate and disseminate knowledge on
                      various aspect of inter disciplinary sciences, integrated systems, global and local issue, state of the art tools and technology etc. Bring together the academicians, scientists, engineers
                      and manufacturers from various institutions, universities, colleges and industry to discuss the relevance of various futuristic technologies emerging in this area throughout the world and
                      share their views.
                    </p>
                      <div class="divider"></div>
                      <h5 class="header">Areas or topics of paper</h5>
                      <div class="row">
                        <div class="light col s12 m6">
                          <span class="red-text"><i class="fa fa-circle"></i></span> Material Science and Technology<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Theoretical and Applied Physics<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Renewable Energy and Technology<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Life Sciences and Bioengineering<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Computational Science<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Waste Management<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Nano Science and Technology<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Green Technology<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Organic Synthesis<br>
                        </div>

                        <div class="light col s12 m6">
                          <span class="red-text"><i class="fa fa-circle"></i></span> Sustainable Technology and Development<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Mathematics in Applied Sciences<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Food Engineering and Technology<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Information Technology<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Measurements and Control<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Multi-media Communication &amp; Design<br>
                          <span class="red-text"><i class="fa fa-circle"></i></span> Earth and Atmospheric Science<br>
                        </div>
                      </div>

                      <div class="divider"></div>
                      <h5 class="header" id="guides">Abstracts Submission Guidelines</h5>
                      <div class="teal-text text-justified">
                        The abstract of paper (not exceeding 200 words), should be submitted to <strong class="chip black-text">asset.2k18@gmail.com</strong> by 10th February 2018. The decision of the organizing committee for the acceptance/rejection will be final. The authors are requested to submit their abstract in the following
                        format.
                      </div>

                      <div class="">
                        <ul>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Font Type: Times New Roman</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Title: A concise title with font size 14, Bold</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Author: font size 12, regular</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Affiliation: font size 10, regular</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Email id, phone number, one copy passport size photo with biblography and star mark(*) of the corresponding author.</li>
                        </ul>
                      </div>


                </div>
              </div>
              <div class="col s12 m4">
                  <p>you can <span class="green-text"> submit your paper through</span> <span class="chip">asset.2k18@gmail.com</span> or</p>
                  <p><a href="{{ route('submission') }}" class="btn waves-effect blue light-wave btn-large" style="width: 100%;">Submit Paper</a></p>
                  <div class="divider"></div>
                  <!--p>For offline submission of paper download <a class="btn" href="{{ url('uploads/offlinesubmission.pdf') }}">OFFLINE FORM</a>.<br>Fill in and submit at Central Library, CIT Kokrajhar (Conference Hall)</p>
                  -->
                  <div id="submission-guide">
                    <h5></h5>
                    <p class="teal-text">Abstract submission deadline - <span class="red-text">10th February 2018 </span><br>
                      Paper acceptance letter will be sent (via e-mail) on - <span class="red-text">10th February 2018 </span><br>
                      Registration deadline - <span class="red-text">10th February 2018</span></p>
                  </div>

                  <div class="card-panel red white-text lighten-1">
                      <p class="bolder">All accepted full papers will be published in the conference proceedings or UGC journal with ISBN number.</p>
                  </div>

                  <div class="card-panel white">
                    <h5>Download Templates</h5>
                    <span><a href="{{ asset('uploads/template-proceeding-paper.docx') }}" class="btn wave blue light-wave" style="width:100%">Proceeding Paper Template</a></span><br/><br/>
                    <span><a href="{{ asset('uploads/template-for-poster.pdf') }}" class="btn wave blue light-wave" style="width:100%">Template For Poster</a></span><br/><br/>
                    <span>Poster Size: (38x50) inches</span>
                    {{--
                    <p class="red-text">After submission of paper each author must register (Online/Offline).</p>
                    <p class="light">Registration to ICTL17 is simple. You can either register online or offline. For online registration go through <a href="{{ url('http://ictl.co.in/registration') }}"> http://ictl.co.in/registration </a> and for offline registration, download offline registration form from (<a href="{{ asset('uploads/registrationform.pdf') }}">here.</a>) Fill in the forms and send us at ictl@cit.ac.in.</p>
                    --}}
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
