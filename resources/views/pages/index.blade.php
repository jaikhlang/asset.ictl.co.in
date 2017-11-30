@extends('layouts.app')

@section('title', '63RD Annual Technical Session of Assam Science Society 2018')

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
  <!-- Carousels -->
  <section class="page-carousel">
    <div class="carousel carousel-slider center" data-indicators="true">
      <div class="carousel-fixed-item container">
        <a class="btn waves-effect red white-text darken-text-2 left hide-on-med-and-down" style="text-transform: unset!important;">Register Now!</a>
      </div>
      <div class="carousel-item red white-text" href="#one!">
        <img src="{{ asset('image/banner/s-2.jpg') }}" alt="">
      </div>
      <div class="carousel-item amber white-text" href="#two!">
        <img src="{{ asset('image/banner/s-1.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <!-- Speakers -->
  <section id="speakers">
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <h5 class="white-text">Keynote speakers</h5>
        </div>

        <!--Row One Speakers-->
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Dr. H Kharkwal <br><small>Joint Director, Ministry of Environment, Forest and Climate Change Indira Paryavaran Bhawan, New Delhi</small></h6>
              </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Prof. Bhupendra Nath Goswami<br> <small>Former Director, IITM, (Shanti Swarup Bhatnagar Awardee),Pune</small></h6>
              </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Prof. Nikhil Kumar Singha<br><small>Department of Rubber Technology, IIT Kharagpur, West Bengal</small></h6>
              </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Prof. Uday Shanker &nbsp; Dixit <br> <small>Department of Mechanical Engineering,&nbsp; IIT Guwahati, Assam</small></h6>
              </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <!-- Row Two Speakers -->
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Prof. S N Naik<br> <small>Department of Center for Rural Development and Technology, IIT Delhi</small></h6>
              </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Prof. B K Das<br> <small> Department of Chemistry, Gauhati University, Guwahati, Assam</small> </h6>
              </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Prof. Madhurjya P Bora <br> <small> Department of Physics, &nbsp; Gauhati University, Guwahati, Assam</small> </h6>
              </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card-panel hoverable speaker-item">
              <div class="client-img center">
                  <img alt="client-image" class="center-block" src="{{ asset('image/speakers/avatar.jpg') }}">
              </div>
              <div class="center">
                  <h6>Apollo Tyres<br> <small> Something ..</small> </h6>
              </div>
          </div>
        </div>
        <!-- Rows Ended -->

      </div>
    </div>
  </section>

  {{--
  <section id="speakers" class="">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
              <!-- SECTION TITLE -->
              <div class="white-text">
                  <h5 class="">Keynote speakers</h5>
              </div>
            </div>
            <div class="col s12 m12 card-panel z-depth-0">
                <!-- SLIDER STRUCTURE -->
                <div class="swiper-container" style="margin: 15px;">
                    <div class="swiper-wrapper">
                        <!-- SLIDE ONE -->
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/ranaweera.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Mr. Prasanna Ranaweera</h5>
                                    <p>Director, National Institute of Library and Information Sciences (NILIS)</p>
                                    <cite>University of Colombo, Sri Lanka</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/clara.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Dr. Clara M. Chu</h5>
                                    <p>Mortenson Distinguished Professor &amp; Director, Mortenson Center for International Library Programs</p>
                                    <cite>University of Illinois at Urbana-Champaign, USA</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/rodolf.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Jose Rodolfo Hernandez-Carrion</h5>
                                    <p>Professor Department of Applied Economics</p>
                                    <cite>University of Valencia Campus dels Tarongers Avenida de los Naranjos s/n Valencia 46022 España-Spain (E.U.)</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/ibohal.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Dr. Ch. Ibohal Singh</h5>
                                    <p>Prof. Dept. of Library and Information Science.</p>
                                    <cite>Manipur University, Manipur, India</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/mezban.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Dr. Muhammad Mezbah-ul-Islam</h5>
                                    <p>Professor &amp; Chairman, Department of Information Science and Library Management</p>
                                    <cite>University of Dhaka, Bangladesh</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/hosamani.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>H. G. Hosamani</h5>
                                    <p>Scientist-C (Library Science) INFLIBNET Centre, Gandhinagar</p>
                                    <cite>Gujarat, India</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/manojk.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Manoj Kumar K</h5>
                                    <p>Scientist-D (Computer Science), INFLIBNET Centre, Gandhinagar</p>
                                    <cite>Gujarat, India</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/chandel.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>A. S. Chandel</h5>
                                    <p>Librarian, Central Library, Sikkim University</p>
                                    <cite>Sikkim, India</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/rath.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Prof. Pravakar Rath</h5>
                                    <p>Professor, Department of Information &amp; Library Science, Mizoram University</p>
                                    <cite>Mizoram, India</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/dappa.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Dr. C R Karisiddappa</h5>
                                    <p>Emeritus Professor, Karnatak University</p>
                                    <cite>Dharwad, India</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/dhoj.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Prof. Bhim Dhoj Shrestha</h5>
                                    <p>Head, Department of Library and Information Science, Tribhuvan University</p>
                                    <cite>Kathmandu, Nepal</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/upendra.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <h5>Mr. Upendra Prasad Mainali</h5>
                                    <p>Chief Librarian, (Under Secretary) Nepal National Library</p>
                                    <cite>Nepal</cite>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/gohain.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <span class="pink-text">(Rapporteur General)</span>
                                    <h5>Mr. Hemanta Kumar Gohain</h5>
                                    <p>Deputy Librarian, Assam Agricultural University, Jorhat, Assam, India</p>
                                    <!--cite></cite-->
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="">
                                <!--CLIENT IMAGE-->
                                <div class="client-img center">
                                    <img alt="client-image" class="center-block" src="{{ asset('image/speakers/rajani.jpg') }}">
                                </div>
                                <!--CLIENT QUOTE-->
                                <blockquote class="center">
                                    <span class="pink-text">(Seminar Director)</span>
                                    <h5>Prof. Rajani Kanta Barman</h5>
                                    <p>Department of Library &amp; Information Science, Gauhati University, Guwahati-14</p>
                                    <!--cite></cite-->
                                </blockquote>
                            </div>
                        </div>
                    </div><br>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
      </div>
  </section>
  --}}
  <!-- Program Details -->
  <!-- Programs -->
  <section id="details" class="grey lighten-3 box-tabs">
    <div class="container">
        <div class="row">
          <div class="col s12 m12"><h5 class="white-text">Programme details</h5></div>
          <div class="col s12 m12" >
            <div class="card-panel tabs-vertical" style="padding-top: 2.5rem;">
                <!-- Tab Menu -->
                <div class="col s12 m3">
                    <ul class="tabs">
                      <li class="tab"><a class="active" href="#countdown">Soon</a></li>
                      <li class="tab"><a href="#importantdates">Important Dates</a></li>
                      <li class="tab"><a href="#programme">Programme Details</a></li>
                      <li class="tab"><a href="#keynote">Speakers/Guests</a></li>
                      <li class="tab"><a href="#call-for-paper">Call For Paper</a></li>
                      <li class="tab"><a href="#submission">Paper Submission</a></li>
                      <li class="tab"><a href="#registration">Registration</a></li>
                    </ul>
                </div>
                <div class="col s12 m9">
                    <!-- Countdown Dates -->
                    <div id="countdown" class="card-panel grey lighten-3 orange-text z-depth-0">
                      <div class="card-content tab-content center">
                          <!--div id="count-down" class="count-down"></div-->
                          <h5 class="" style="padding: 4rem 0; font-weight: 600;">
                            <a class="pink-text text-accent-3" href="{{ url('/') }}">ASSET 2018</a>
                          </h5>
                          <div class="divider"></div>
                          <p>Mark Your Calendar. We Are Begining Soon.</p>
                          <a href="{{ url('/notice-lists') }}" class="btn orange">notices</a>
                      </div>
                    </div>

                    <!-- Important Dates -->
                    <div id="importantdates" class="card-panel blue z-depth-1">
                      <div class="card-content tab-content white-text">
                          <span class="card-title">IMPORTANT DATES</span>
                          <div class="divider"></div>
                          <p>Conference Date: <span><strong> 2nd, 3rd, &amp; 4th March 2018.</strong></span></p>
                          <p>Registration /Abstract Submission Deadline: <span><strong> 31st December 2017</strong></span></p>
                          <p>Paper Acceptance Letter (via e-mail): <span> <strong> 10th January 2018</strong></span></p>
                      </div>
                    </div>

                    <!-- Programe Schedules -->
                    <div id="programme" class="card-panel blue white-text z-depth-1">
                        <div class="card-content tab-content">
                            <span class="card-title">PROGRAMME SCHEDULES</span>
                            <div class="divider"></div>
                            <style> .marginpush{margin-left: 40px;}</style>
                            <div class="">
                              <p>To be updated soon ...</p>
                            </div>
                            <!--div class="">
                              <p><strong>8th July 2017</strong><br>
                                  <div class="marginpush">
                                      <span class=""> <i class="fa fa-clock-o"></i> 09.00 am - 09.30 am </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Registration</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 09.30 am - 10.00 am </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Breakfast</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 10.00 am - 12.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Inaugural Session</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 12.00 pm - 01.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Lunch Break</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 01.00 pm - 03.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Technical Session I</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 03.00 pm - 03.15 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Light Tea Break</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 03.15 pm - 05.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Technical Session II</span><br>
                                      <span class=""> <i class="fa fa-clock-o"></i> 06.00 pm - 08.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Traditional Cultural Programme</span>
                                  </div>
                              </p>
                              <p><strong>9th July 2017</strong><br>
                                <div class="marginpush">
                                    <span class=""> <i class="fa fa-clock-o"></i> 09.00 am - 09.30 am </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Breakfast</span><br>
                                    <span class=""> <i class="fa fa-clock-o"></i> 09.30 am - 11.30 am </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Technical Session III</span><br>
                                    <span class=""> <i class="fa fa-clock-o"></i> 11.30 am - 11.45 am </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Tea Break </span><br>
                                    <span class=""> <i class="fa fa-clock-o"></i> 11.45 am - 01.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Technical Session IV</span><br>
                                    <span class=""> <i class="fa fa-clock-o"></i> 01.00 pm - 02.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Lunch Break</span><br>
                                    <span class=""> <i class="fa fa-clock-o"></i> 02.00 pm - 04.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Technical Session V</span><br>
                                    <span class=""> <i class="fa fa-clock-o"></i> 06.00 pm - 08.00 pm </span> <span class=""> &nbsp; <i class="fa fa-hand-o-right"></i> Traditional Cultural Programme &amp; Valedictory Session.</span>
                                </div>
                              </p>
                              <p><strong>10th July 2017</strong><br>
                                <div class="marginpush">
                                  <p><i class="fa fa-hand-o-right"></i> Visit to Gelephu Bhutan Free of Cost. <br>All the participants are suggested to bring their Voter ID, Driving License, Aadhar Card, Identity Card, Passport etc. for immigration procedure to visit Bhutan.</p>
                                </div>
                              </p>

                              <div class="center">
                                <a href="{{ asset('uploads/Programme-Schedule-ICTL-2017.pdf') }}" class="btn orange" target="_blank">View Complete Program Schedule</a>
                              </div>
                            </div-->
                        </div>
                      </div>

                    <!-- Keynote Speakers -->
                    <div id="keynote" class="card-panel white lighten-5 z-depth-0">
                        <div class="card-content tab-content">
                      <span class="card-title">KEYNOTE SPEAKERS/ INVITED SPEAKERS/ GUESTS </span>
                      <p>
                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Dr. H Kharkwal</span><br>
                              <span class="blue-text">Joint Director, Ministry of Environment, Forest and Climate Change Indira Paryavaran Bhawan</span><br>
                              <span class="pink-text">New Delhi</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. Bhupendra Nath Goswami</span><br>
                              <span class="blue-text">Former Director, Indian Institute of Tropical Meteorology, (Shanti Swarup Bhatnagar Awardee)</span><br>
                              <span class="pink-text">Pune</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. Suman Chakraborty</span><br>
                              <span class="blue-text">Department of Mechanical Engineering, (Shanti Swarup Bhatnagar Awardee, <span class="red-text">AWAITED</span>)</span><br>
                              <span class="pink-text">IIT Kharagpur, West Bengal</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. Nikhil Kumar Singha </span><br>
                              <span class="blue-text">Department of Rubber Technology, IIT Kharagpur</span><br>
                              <span class="pink-text">West Bengal</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. Uday Shanker Dixit</span><br>
                              <span class="blue-text">Department of Mechanical Engineering, IIT Guwahati</span><br>
                              <span class="pink-text">Guwahati, Assam</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. S N Naik </span><br>
                              <span class="blue-text">Department of Center for Rural Development and Technology</span><br>
                              <span class="pink-text">IIT Delhi</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. B K Das </span><br>
                              <span class="blue-text">Department of Chemistry, Gauhati University</span><br>
                              <span class="pink-text">Guwahati, Assam</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Prof. Madhurjya P Bora</span><br>
                              <span class="blue-text">Department of Physics, Gauhati University</span><br>
                              <span class="pink-text">Guwahati, Assam</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>

                          <div class="row card-panel grey lighten-5 z-depth-1">
                            <div class="col s3">
                              <span><img src="{{ asset('image/speakers/avatar.jpg') }}" style="border-radius: 50%; width:70%; height:70%;"/></span>
                            </div>
                            <div class="col s9">
                              <span class="s-name orange-text">Apollo Tyres</span><br>
                              <span class="blue-text">To be updated</span><br>
                              <span class="pink-text">To be updated</span><br>
                              <span class="orange-text">&nbsp;</span>
                            </div>
                          </div>
                      </p>
                    </div>
                    </div>
                    <!-- /Keynote Speakers -->

                    <!-- Call For Paper -->
                    <div id="call-for-paper" class="card-panel white lighten-5 z-depth-1">
                        <div class="card-content tab-content">
                          <div class="">
                              <img src="{{ asset('images/award.jpg') }}" style="width: 100%">
                          </div>
                            <span class="card-title">CALL FOR PAPER-AUTHOR GUIDELINES</span>
                            <div class="divider"></div>
                            <h5 class="header">Abstracts Submission Guidelines</h5>
                            <div class="teal-text text-justified">
                              The abstract of paper (not exceeding 200 words), can be submitted to the address <span class="chip">“ASSET 2018”,
                              CIT Kokrajhar, BTAD, Assam 783370</span> by <span class="black-text"><strong>31st December 2017</span></strong> or to the email id
                              <span class="black-text"><strong class="chip">asset.2k18@gmail.com</strong></span>, The authors are requested to submit their abstract in the prescribed
                              format and in <span class="black-text">Times New Roman font size 12</span>, abstract tittle <span class="black-text">font 14 bold</span>. An author can
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
                            <p class="light">
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

                            <p class="green-text">All accepted full papers will be published in the conference proceedings or UGC journal with ISBN number.</p>
                        </div>
                    </div>
                    <!-- /Call For Paper -->

                    <!-- Paper Submission -->
                    <div id="submission" class="card-panel blue white-text z-depth-1">
                      <div class="card-content tab-content">
                          <span class="card-title">PAPER SUBMISSION</span>
                          <div class="divider"></div>
                          <p>You can submit your paper through an email <strong class="chip">asset.2k18@gmail.com</strong>.

                      </div>
                    </div>
                    <!-- /Paper Submission -->

                    <!-- Registration -->
                    <div id="registration" class="card-panel blue z-depth-1">
                      <div class="card-content tab-content white-text">
                          <span class="card-title white-text">REGISTRATION DETAILS</span>
                          <div class="divider"></div>
                          <p class="light">
                            Registration can be done online or offline.<br>
                            <span><strong>1. Online Mode</strong>
                              Go to registration page
                              <a class="white-text" href="{{ route('events.registration') }}">(Register)</a>.
                               Proceed with Fees Payment - (Netbanking/Debit Card/Credit Card).</span>
                            <br>
                            <span><strong>2. Offline Mode</strong>
                              Download registration form from
                              <a class="white-text" href="{{ asset('uploads/RegistrationForm.docx') }}">(Offline Register Form)</a>.
                              (D/D, Cheque should be made in favour of ASSET 2018, CIT Kokrajhar payable at SBI, BTC Branch, Kokrajhar, Assam).
                              Send filled in registration form to <span class="chip">asset.2k18@gmail.com in.</span>
                            </span>
                          </p>

                          <p class="white-text">Registration Fees</p>
                          <ul class="registration-fee">
                            <li>
                              <span>1. Students (CIT &amp; BU) only</span>
                              <span class="white-text"><strong>(Early Bird)</strong> <u>Rs 1000/- INR</u></span>
                              <span class="white-text"><strong>(Late)</strong> <u>Rs 1500/- INR</u></span>
                            </li>

                            <li>
                              <span>2. Researcher</span>
                              <span class="white-text"><strong>(Early Bird)</strong> <u>Rs 2000/- INR</u></span>
                              <span class="white-text"><strong>(Late)</strong> <u>Rs 2500/- INR</u></span>
                            </li>

                            <li>
                              <span>3. Academician</span>
                              <span class="white-text"><strong>(Early Bird)</strong> <u>Rs 3000/- INR</u></span>
                              <span class="white-text"><strong>(Late)</strong> <u>Rs 3500/- INR</u></span>
                            </li>

                            <li>
                              <span>4. Corporation/Industry</span>
                              <span class="white-text"><strong>(Early Bird)</strong> <u>Rs 4500/- INR</u></span>
                              <span class="white-text"><strong>(Late)</strong> <u>Rs 5000/- INR</u></span>
                            </li>
                          </ul>

                          <br><span class="white-text">Proceed to </span>
                          <a href="{{ route('events.registration') }}" class="btn blue lighten-2">Registration</a>&nbsp;&nbsp;
                          <a href="{{ asset('uploads/RegistrationForm.docx') }}" class="btn blue lighten-2">Download Form</a>

                          {{--
                          <br>
                          <br>
                          <div class="">
                            <h6>Accommodation</h6>
                            <span>Accommodation (AC) available on first come first serve basis. Limited Seats.
                              <span class=""><span class="WebRupee">Rs</span>500/- INR Per Head/ Per Night (Twin Sharing).</span>
                              <p> Book Your Accommodation Here <a href="{{ url('http://reservation.ictl.co.in') }}" class="btn blue lighten-2" target="_blank">BOOK NOW</a></p>
                            </span>
                            <div class="divider"></div>
                            <span class="">Accommodation can also be arranged by us on your own expense. Please Contact Us.</span>
                          </div> --}}
                      </div>
                    </div>
                    <!-- /Registration -->
                </div>
            </div>
          </div>
        </div>
    </div>
  </section>

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
              <span class="valign-wrapper">
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="blue-text"> <span class="grey-text text-darken-1">Dr. Pranjal Kalita</span> <br>+918447294108 (Convenor)</span>
                &nbsp;&nbsp;
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="blue-text"> <span class="grey-text text-darken-1">Dr. Dhrubajyoti Haloi</span> <br>+917896777085 (Convenor)</span>
                &nbsp;&nbsp;
                <i class="material-icons blue white-text z-depth-1">phone</i> &nbsp;&nbsp;
                <span itemprop="telephone" class="blue-text"> <span class="grey-text text-darken-1">Dr. Manasi Buzar Baruah</span> <br>+919435120216 (Assistant Convenor)</span>
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
