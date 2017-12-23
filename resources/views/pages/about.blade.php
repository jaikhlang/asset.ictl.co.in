@extends('layouts.app')

@section('metatags')
  <meta name="description" content="This conference provides a National forum for academician researchers, developers and industry
  professionals to exchange their valuable ideas and showcase the ongoing works which may lead to
  path breaking foundation of the futuristic growth in science engineering and technology. The aim of
  this conference is to deliberate and disseminate knowledge on various aspect of inter disciplinary
  sciences, integrated systems, global and local issue, state of the art tools and technology etc. Bring
  together the academicians, scientists, engineers and manufacturers from various institutions, universities,
  colleges and industry to discuss the relevance of various futuristic technologies emerging in this
  area throughout the world and share their views."/>
  <meta name="keywords" content="asset18, asset2018, asset, assam science society, cit, cit kokrajhar, assam, bu, bodoland university, university conference, national conference assam, Green Science and Technology for Cleaner Society"/>
@endsection

@section('title', 'About CIT & BU - 63RD Annual Technical Session of Assam Science Society 2018')

@section('styles')
  <style media="screen">

  </style>
  <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('content')

  <!-- About CIT & BU Kokrajhar -->

  <section id="about-host" class="grey lighten-2">
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="">
            <div>
              <h5>ASSET 2018</h5>
              <span>63<sup>rd</sup> Annual Technical Session of Assam Science Society, 2018.</span>
              <span><u>“National Conference on Applied Sciences, Sustainable and Evolving Technologies”</u></span>
              <span>March 9th, 10th &amp; 11th of 2018.
              <div class="">
                <p>This conference provides a National forum for academician researchers, developers and industry
                professionals to exchange their valuable ideas and showcase the ongoing works which may lead to
                path breaking foundation of the futuristic growth in science engineering and technology. The aim of
                this conference is to deliberate and disseminate knowledge on various aspect of inter disciplinary
                sciences, integrated systems, global and local issue, state of the earth tools and technology etc. Bring
                together the academicians, scientists, engineers and manufacturers from various institutions, universities,
                colleges and industry to discuss the relevance of various futuristic technologies emerging in this
                area throughout the world and share their views.</p>
              </div>
              <div class="divider grey"></div>
            <span class="fa fa-quote-left grey-text text-darken-2"></span> &nbsp;  <a href="{{ url('//www.conferenceasset.com') }}" class="grey-text text-darken-1">www.conferenceasset.com</a>
            </div>

            <div class="" style="padding: 1.5rem 0;"></div>

            <div class="">
                <img class="responsive-img" src="{{ asset('//www.cit.ac.in/assets/img/cit-main-image.png') }}" alt="">
            </div>
            <h5>Central Institute of Technology, Kokrajhar</h5>
            <div class="">
              <p>Central Institute of Technology (CIT) is a Centrally Funded Technical Institute under the Ministry of Human Resource Development,
              Govt. of India. The genesis of this institute was the memorandum of Settlement on Bodoland Territorial Council (BTC)
              signed in New Delhi by the Assam Government, the Union Government and the Bodo Liberation Tigers, on February 10,
              2003.CIT, a fruit of the memorandum was established on 19th December, 2006 in Kokrajhar of Bodoland Territorial Area District,
              Assam. The institute is situated 10 Km north to the Kokrajhar Town. This Institute is an autonomous body registered under
              the Societies Registration Act. 1860 and is functioning under a Board of Governors (BOG). Currently it is offering seven
              different programs on diploma and B Tech modules.</p>
            </div>
            <div class="divider grey"></div>
            <span class="fa fa-quote-left grey-text text-darken-2"></span> &nbsp;<a href="{{ url('//www.cit.ac.in') }}" class="grey-text text-darken-1">www.cit.ac.in</a>


            <div class="" style="padding: 1.5rem 0;"></div>

            <div class="">
              <img class="responsive-img" src="{{ asset('//bodolanduniversity.ac.in/s24c/images/pic1.jpg') }}" alt="">
            </div>
            <h5>Bodoland University, Kokrajhar</h5>
            <div class="">
              <p>Bodoland University (BU) is a UGC recognized state university at Debargaon. The university was established by the Bodoland
              University Act 2009 by the Assam Government. Bodoland University and is an up-gradation of the Kokrajhar Campus of Gauhati
              University to a full-fledged State University as per the provision of the Act. This university offers PG degree in almost all
              the subjects of Science, Arts and Commerce streams. It has also started MPhil program in some selective subjects and PhD in
              almost all subjects. The affiliation process for the colleges of BTAD area is going on and soon the university will have more
              affiliated colleges under its wings.</p>
            </div>
            <div class="divider grey"></div>
            <span class="fa fa-quote-left grey-text text-darken-2"></span> &nbsp;<a href="{{ url('//www.bodolanduniversity.ac.in') }}" class="grey-text text-darken-1">www.bodolanduniversity.ac.in</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
@endsection
