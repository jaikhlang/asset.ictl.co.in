@extends('layouts.app')

@section('title', 'Registration - 63RD Annual Technical Session of Assam Science Society 2018')

@section('styles')
  <link href="{{ asset("css/owl.carousel.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset("css/swiper.min.css") }}" type="text/css" rel="stylesheet" media="screen,projection"/>

@endsection

@section('content')

  <section id="participant-registration" class="grey lighten-3">
      <div class="container">
          <div class="row">
              <div class="col s12 m12 center red-text" style="padding-bottom: 1.5rem;">
                <span>Both Online and Offline modes are available for registration.</span>
              </div>

              <div class="col s12 m8">
                  <div class="card-panel white lighten-5 z-depth-1">
                      <h5>Registration <small class="grey-text text-lighten-2">(Online)</small></h5>

                      <form class="" action="{{ route('registrations.participant') }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('POST') }}
                        {{ csrf_field() }}


                        <label for="name">Full Name (Delegate Name)</label>
                        <input name="name" value="{{ Auth::user()->name }}" id="name" placeholder="Delegate Name" type="text"  class="validate" required/>


                        <!-- Select Category Type -->
                        <label for="participant-category">Select Category</label>
                        <div id="participant-category" class="participant-category">
                            <span>
                              <input name="group" value="student" class="with-gap" type="radio" id="student" />
                              <label for="student">Student (BU &amp; CIT) only </label>
                            </span>

                            <span>
                              <input name="group" value="researcher" class="with-gap" type="radio" id="researcher" />
                              <label for="researcher">Researcher</label>
                            </span>

                            <span>
                              <input name="group" value="academician" class="with-gap" type="radio" id="academician" />
                              <label for="academician">Academician</label>
                            </span>

                            <span>
                              <input name="group" value="corporate" class="with-gap" type="radio" id="corporate"  />
                              <label for="corporate">Corporation/Industry</label>
                            </span>
                        </div><br>
                        <!-- /End of Select Category Type -->


                          <label for="designation">Designation</label>
                          <input name="designation" id="designation" placeholder="Designation" type="text"  class="validate" required/>



                        <div class="file-field input-field">
                          <div class="btn">
                            <span>Upload Photo</span>
                            <input type="file" name="profileImg" id="profileImg" required>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" placeholder="(Acceptable file types (.jpg/.png))"  type="text" >
                          </div>
                        </div>

                        <label for="organisation">Organisation/Institute</label>
                        <input name="organisation" id="organisation" placeholder="Organisation/Institute Name" type="text" class="validate"/>

                        <label for="address">Address</label>
                        <input name="address" id="address" placeholder="Address" type="text" class="validate" required/>

                        <label for="pin">Pin</label>
                        <input name="pin" id="pin" placeholder="Pin" type="text" class="validate" required/>


                        <label for="email">Email</label>
                        <input name="email" value="{{ Auth::user()->email }}" id="email" placeholder="Email" type="text" class="validate" required/>

                        <label for="phone">Phone</label>
                        <input name="phone" id="phone" placeholder="Phone Number" type="text" class="validate" required/>

                        <label for="paper">Paper Title (if presenting a paper)</label>
                        <input  id="paper" type="text" name="paper" placeholder="Levae blank if not presenting." class="">

                        <br>
                        <button class="btn waves-effect blue waves-blue">Register Now</button>
                        <!--button type="button" class="btn waves-effect blue waves-blue" onclick="serviceUnavailable()">Register Now</button>
                        <span class="red-text" id="warningMsg"></span-->
                      </form>
                  </div>
              </div>

              <div class="col s12 m4">
                <div class="card-panel white lighten-5 z-depth-1">
                    <h5>Registration Guidelines</h5>
                    <p><span class="red-text"><i class="fa fa-circle-o"></i></span> Registration Fee </p>
                    <ul class="registration-fee">
                      <li>
                        <span>1. Students (CIT &amp; BU) only</span>
                        <span class="green-text"><strong>(Early Bird)</strong> Rs 1000/- INR</span>
                        <span class="green-text"><strong>(Late)</strong> Rs 1500/- INR</span>
                      </li>

                      <li>
                        <span>2. Researcher</span>
                        <span class="green-text"><strong>(Early Bird)</strong> Rs 2000/- INR</span>
                        <span class="green-text"><strong>(Late)</strong> Rs 2500/- INR</span>
                      </li>

                      <li>
                        <span>3. Academician</span>
                        <span class="green-text"><strong>(Early Bird)</strong> Rs 3000/- INR</span>
                        <span class="green-text"><strong>(Late)</strong> Rs 3500/- INR</span>
                      </li>

                      <li>
                        <span>4. Corporation/Industry</span>
                        <span class="green-text"><strong>(Early Bird)</strong> Rs 4500/- INR</span>
                        <span class="green-text"><strong>(Late)</strong> Rs 5000/- INR</span>
                      </li>
                    </ul>

                </div>

                {{--<div class="card-panel red lighten-1">
                  <p class="white-text">Want To Submit Reaserch Paper?</p>
                  <span class="white-text"> proceed to </span>
                  <a href="{{ url('submission') }}" class="btn waves-effect blue wave-blue">Submission</a>
                </div> --}}

                <div class="card-panel indigo lighten-1 center">
                    <span>
                    <a href="{{ url('https://mygrocerydelivery.in/4b-it-solutions') }}"> <img src="{{ asset('image/manager.png') }}" alt="4B Event Management Team" style="width: 55%;"> </a>
                    <br><span class="white-text lighten-1">Cashless Payment Partner</span>
                  </span>
                </div>
              </div>

              <!-- Offline Mode Registration -->
              <div class="col s12 m8 l8">

                  <div class="center" style="padding: 2rem 0;"><span class="grey-text">Or Register Offline</span></div>

                  <div class="card-panel white lighten-3">
                    <h5>How To Register Offline.</h5>
                      <p>1. Download Registration From Here <a href="{{ asset('uploads/RegistrationForm.docx') }}">(Offline) Registration Form.</a></p>
                      <p>2. Fill in all the details required and affix passport size photograph.</p>
                      <p>3. (D/D, Cheque should be made in favour of ASSET 2018, CIT Kokrajhar payable at SBI, BTC Branch, Kokrajhar, Assam)</p>
                      <p>4. Send filled in registration form to <span class="chip blue-text">asset.2k18@gmail.com in.</span></p>
                      <p>5. On successful registration,you will be notified with an email.</p>
                  </div>
              </div>
              <div class="col s12 m4 l4">
                  {{--
                  <div class="card-panel white">
                      <h5>Accommodation</h5>
                      <p>Accommodation (AC) available on first come first serve basis. Limited Seats.
                        <span class="teal-text"><span class="WebRupee">Rs</span>500/- INR Per Head/ Per Night (Twin Sharing).</span>
                      </p>
                      <a href="{{ url('http://www.reservation.ictl.co.in') }}" class="btn blue white-text" target="_blank">BOOK NOW</a><br><br>
                      <div class="divider"></div>
                    <span class="teal-text">Accommodation can also be arranged by us on your own expense. Please Contact Us.</span>
                  </div> --}}
              </div>

              <div class="col s12 m12 center">
                  <p class="grey-text light"> For any difficulties/broken links/errors kindly report us at ictl@cit.ac.in.</p>
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