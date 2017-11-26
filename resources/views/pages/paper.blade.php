@extends('layouts.app')

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
  <link href="css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/swiper.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')

  <!-- Call for paper -->
  <section id="paper" class="callforpaper grey lighten-3" style="overflow: hidden;">
      <div class="container">
          <div class="row">
              <div class="col s12 m8">
                <div class="card-panel white lighten-5 z-depth-1">
                    <div class="">
                        <img src="{{ asset('images/award.jpg') }}" style="width: 100%">
                    </div>
                    <h5>Aim &amp; Scopes</h5>
                    <p class=" text-justified">
                      This conference provides a National forum for academician researchers, developers and industry professional to exchange their valuable ideas and showcase the ongoing works
                      which may lead to path breaking foundation of the futuristic growth in science engineering and technology. The aim of this conference is to deliberate and disseminate knowledge on
                      various aspect of inter disciplinary sciences, integrated systems, global and local issue, state of the earth tools and technology etc. Bring together the academicians, scientists, engineers
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
                      <h5 class="header">Abstracts Submission Guidelines</h5>
                      <div class="teal-text text-justified">
                        The abstract of paper (not exceeding 200 words), the address “ASSET 2018”,
                        Kokrajhar, BTAD, Assam 783370 by <span class="black-text"><strong>31st December 2017</span></strong> or to the email id
                        <span class="black-text"><strong>asset.2k18@gmail.com</strong></span>, The authors are requested to submit their abstract in the prescribed
                        format and in Times New Roman font size 12, abstract tittle front 14 bold. An author can
                        submit up to a maximum of three paper, including papers having more than one author. All
                        abstracts submitted for presentation will be screened. Authors whose papers are accepted
                        will be informed at the earliest by the committee. The decision of the organising committee
                        for the acceptance/rejection will be final.
                      </div>

                      <div class="">
                        <ul>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Title - A concise and informative title</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> The name of the author and affiliation</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> The e-mail address of the corresponding author</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Keywords: Provide 3-5 keywords in an alphabetical order</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> One copy passport size photo</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Bibliography of the author</li>
                          <li><span class="red-text"><i class="fa fa-circle"></i></span> Presenter author must mark (*)</li>
                        </ul>
                      </div>


                </div>
              </div>
              <div class="col s12 m4">
                  <p>you can <span class="green-text"> submit your paper through</span> <span class="chip">asset.2k18@gmail.com in.</span></p>
                  <!--p><a href="{{ url('submission') }}" class="btn waves-effect blue waves-blue">Submit Paper</a></p-->
                  <div class="divider"></div>
                  <!--p>For offline submission of paper download <a class="btn" href="{{ url('uploads/offlinesubmission.pdf') }}">OFFLINE FORM</a>.<br>Fill in and submit at Central Library, CIT Kokrajhar (Conference Hall)</p>
                  -->
                  <div id="submission-guide">
                    <h5></h5>
                    <p class="teal-text">Registration / abstract submission deadline - <span class="red-text">31st December 2017 </span>
                      &amp; Paper acceptance letter will be sent (via e-mail) on - <span class="red-text">10th January 2018 </span></p>
                  </div>

                  <div class="card-panel red white-text lighten-1">
                      <p class="bolder">All accepted full papers will be published in the conference proceedings or UGC journal with ISBN number.</p>
                  </div>

                  <div class="card-panel white">
                    Poster Size ??
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
